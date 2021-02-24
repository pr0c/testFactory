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
        if(count($createRobot) > 1 && isset($this->robots[$createRobot[1]]))
        {
            $robot = clone $this->robots[$createRobot[1]][0];
            $this->robots[$createRobot[1]][] = $robot;

            if(count($arguments) >= 1)
            {
                $robots = [$robot];
                for($i = 1; $i < $arguments[0]; $i++)
                {
                    $robots[] = clone $this->robots[$createRobot[1]][0];
                }

                return $robots;
            }

            return $robot;
        }

        return false;
    }

    public function addType(RobotInterface $robot)
    {
        $className = explode('\\', get_class($robot));
        $this->robots[end($className)][] = $robot;
    }
}