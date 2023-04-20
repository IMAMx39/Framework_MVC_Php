<?php

namespace App\Framework;

class Route
{
    private $path;
    private $action;
    private $controllerName;

    /**
     * @param $path
     * @param $action
     * @param $controllerName
     */
    public function __construct($path, $action, $controllerName)
    {
        $this->path = $path;
        $this->action = $action;
        $this->controllerName = $controllerName;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getControllerName()
    {
        return $this->controllerName;
    }





}