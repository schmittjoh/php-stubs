<?php

namespace PHPStubs\Tests;

use PHPStubs\ExtensionIntrospector;

class ExtensionIntrospectorTest extends \PHPUnit_Framework_TestCase
{
    private $introspector;

    public function testIntrospect()
    {
        $this->introspector->introspect(new \ReflectionExtension('SPL'));
    }

    protected function setUp()
    {
        $this->introspector = new ExtensionIntrospector();
    }
}