<?php

namespace Classes;

include 'Robots/RobotTest.php';

use Interfaces\RobotInterface;

class FactoryRobot
{
    private $robots;
    private $robotTypes;

    public function __construct()
    {
        $this->robots = [];
        $this->robotTypes = [];
    }

    public function __call($name, $arguments)
    {
        $createRobot = explode('create', $name);
        if(count($createRobot) > 1 && isset($this->robotTypes[$createRobot[1]]))
        {
            $robot = new $this->robotTypes[$createRobot[1]];
            $this->robots[] = $robot;

            return $robot;
        }

        return false;
    }

    public function addType(RobotInterface $robot)
    {
        $className = explode('\\', get_class($robot));
        $this->robotTypes[end($className)] = get_class($robot);
    }
}