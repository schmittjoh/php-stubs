<?php

namespace PHPStubs\Tests;

use PHPStubs\DocumentationParser;

class DocumentationParserTest extends \PHPUnit_Framework_TestCase
{
    private $parser;

    /**
     * This test ensures that the entire PHP Documentation parses without any
     * fatal errors. It does not test the semantical correctness of the parsed
     * information.
     */
    public function testParse()
    {
        $rs = $this->parser->parse(__DIR__.'/../../../vendor/php/docs');
        $this->assertArrayHasKey('classes', $rs);
        $this->assertArrayHasKey('functions', $rs);
        $this->assertArrayHasKey('constants', $rs);

        $this->assertNotEmpty($rs['classes']);
        $this->assertNotEmpty($rs['functions']);
        $this->assertNotEmpty($rs['constants']);
    }

    /**
     * @group functions
     */
    public function testParseFunctions()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/functions');

        $this->assertArrayHasKey('classes', $rs);
        $this->assertArrayHasKey('functions', $rs);
        $this->assertArrayHasKey('constants', $rs);

        $this->assertEmpty($rs['classes']);
        $this->assertEmpty($rs['constants']);
        $this->assertCount(3, $rs['functions']);

        $this->assertEquals('apc_add2', $rs['functions'][0]->getName());

        $this->assertEquals('apc_add', $rs['functions'][1]->getName());
        $this->assertEquals('string', $rs['functions'][1]->getParameter(0)->getAttribute('type'));

        $this->assertEquals('apc_add', $rs['functions'][2]->getName());
        $this->assertEquals('array', $rs['functions'][2]->getParameter(0)->getAttribute('type'));
    }
    
    /**
     * @group functions
     */
    public function testParseFunctionParams()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/parameter-as-ref');
        
        $this->assertCount(1, $rs['functions']);
        $this->assertEquals('pcntl_wait', $rs['functions'][0]->getName());
        
        $params = $rs['functions'][0]->getParameters();
        $this->assertCount(2, $params);
        
        $this->assertEquals('int', $params[0]->getAttribute('type'));
        $this->assertTrue($params[0]->isPassedByReference());
        $this->assertFalse($params[0]->hasDefaultValue());
        
        $this->assertEquals('int', $params[1]->getAttribute('type'));
        $this->assertFalse($params[1]->isPassedByReference());
        $this->assertTrue($params[1]->hasDefaultValue());
    }

    /**
     * @group classes
     */
    public function testParseClasses()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/classes');

        $this->assertCount(2, $rs['classes']);
        $this->assertEmpty($rs['functions']);
        $this->assertEmpty($rs['constants']);

        $this->assertArrayHasKey('outeriterator', $rs['classes']);
        $this->assertTrue($rs['classes']['outeriterator']->getAttribute('interface'));
        $this->assertEquals(array('Iterator'), $rs['classes']['outeriterator']->getInterfaceNames());
        $this->assertCount(1, $rs['classes']['outeriterator']->getMethods());
        $this->assertTrue($rs['classes']['outeriterator']->hasMethod('getInnerIterator'));
        $this->assertEquals('Iterator', $rs['classes']['outeriterator']->getMethod('getInnerIterator')->getAttribute('return_type'));

        $this->assertArrayHasKey('splqueue', $rs['classes']);
        $this->assertFalse($rs['classes']['splqueue']->hasAttribute('interface'));
        $this->assertEquals('SplDoublyLinkedList', $rs['classes']['splqueue']->getParentClassName());
        $this->assertEquals(array('Iterator', 'ArrayAccess', 'Countable'), $rs['classes']['splqueue']->getInterfaceNames());
    }

    /**
     * @group constants
     */
    public function testParseConstants()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/constants');

        $this->assertEmpty($rs['classes']);
        $this->assertEmpty($rs['functions']);
        $this->assertCount(21, $rs['constants']);
        $this->assertEquals('integer', $rs['constants']['APC_BIN_VERIFY_CRC32']->getAttribute('type'));
    }

    /**
     * @group optional-parameter
     */
    public function testParseOptionalVariableParameter()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/optional_parameter');

        $method = $rs['classes']['reflectionclass']->getMethod('newInstance');
        $this->assertTrue($method->hasAttribute('variable_parameters'));
        $this->assertTrue($method->getParameter('_')->hasDefaultValue());
    }

    /**
     * @group refined
     */
    public function testParseRefinedReturn()
    {
        $rs = $this->parser->parse(__DIR__.'/Fixture/refined_return');

        $this->assertEquals('ReflectionProperty[]', $rs['classes']['reflectionclass']->getMethod('getProperties')->getAttribute('return_type'));
    }

    protected function setUp()
    {
        $this->parser = new DocumentationParser();
    }
}