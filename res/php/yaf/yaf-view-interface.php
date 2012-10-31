<?php

/** @phpstub */
interface Yaf_View_Interface
{
    /**
     * Assign value to View engine
     *
     * @param string $name
     * @param string $value
     *
     * @return bool 
     */
    public function assign($name, $value = NULL);

    /**
     * Render and output a template
     *
     * @param string $tpl
     * @param array $tpl_vars
     *
     * @return bool 
     */
    public function display($tpl, $tpl_vars = array());

    /**
     * The getScriptPath purpose
     *
     * @return void 
     */
    public function getScriptPath();

    /**
     * Render a template
     *
     * @param string $tpl
     * @param array $tpl_vars
     *
     * @return string 
     */
    public function render($tpl, $tpl_vars = array());

    /**
     * The setScriptPath purpose
     *
     * @param string $template_dir
     *
     * @return void 
     */
    public function setScriptPath($template_dir);
}