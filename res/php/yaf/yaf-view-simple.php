<?php

/** @phpstub */
class Yaf_View_Simple implements \Yaf_View_Interface
{
    protected $_tpl_vars;
    protected $_tpl_dir;

    /**
     * Constructor of Yaf_View_Simple
     *
     * @param string $tempalte_dir
     * @param array $options
     */
    public function __construct($tempalte_dir, $options = array())
    {
    }

    /**
     * Retrieve assigned variable
     *
     * @param string $name
     *
     * @return void 
     */
    public function __get($name = NULL)
    {
    }

    /**
     * The __isset purpose
     *
     * @param string $name
     *
     * @return void 
     */
    public function __isset($name)
    {
    }

    /**
     * Set value to engine
     *
     * @param string $name
     * @param mixed $value
     *
     * @return void 
     */
    public function __set($name, $value)
    {
    }

    /**
     * Assign values
     *
     * @param string $name
     * @param mixed $value
     *
     * @return bool 
     */
    public function assign($name, $value = NULL)
    {
    }

    /**
     * The assignRef purpose
     *
     * @param string $name
     * @param mixed $value
     *
     * @return bool 
     */
    public function assignRef($name, &$value)
    {
    }

    /**
     * Clear Assigned values
     *
     * @param string $name
     *
     * @return bool 
     */
    public function clear($name = NULL)
    {
    }

    /**
     * Render and display
     *
     * @param string $tpl
     * @param array $tpl_vars
     *
     * @return bool 
     */
    public function display($tpl, $tpl_vars = array())
    {
    }

    /**
     * Render template
     *
     * @param string $tpl_content
     * @param array $tpl_vars
     *
     * @return string 
     */
    public function eval($tpl_content, $tpl_vars = array())
    {
    }

    /**
     * Get templates directory
     *
     * @return string 
     */
    public function getScriptPath()
    {
    }

    /**
     * Render template
     *
     * @param string $tpl
     * @param array $tpl_vars
     *
     * @return string 
     */
    public function render($tpl, $tpl_vars = array())
    {
    }

    /**
     * Set tempaltes directory
     *
     * @param string $template_dir
     *
     * @return bool 
     */
    public function setScriptPath($template_dir)
    {
    }
}