<?php

namespace Classes\Robots;

require_once 'Interfaces/RobotInterface.php';

use Interfaces\RobotInterface;

class MergeRobot implements RobotInterface
{
    private $robots;

    public function __construct()
    {
        $this->robots = [];
    }

    public function getWeight()
    {
        $weight = 0;
        foreach($this->robots as $robot)
        {
            $weight += $robot->getWeight();
        }

        return $weight;
    }

    public function getSpeed()
    {
        $speeds = [];
        foreach($this->robots as $robot)
        {
            $speeds[] = $robot->getSpeed();
        }

        return min($speeds);
    }

    public function getHeight()
    {
        $height = 0;
        foreach($this->robots as $robot)
        {
            $height += $robot->getHeight();
        }

        return $height;
    }

    public function setHeight($height)
    {
        // TODO: Implement setHeight() method.
    }

    public function setSpeed($speed)
    {
        // TODO: Implement setSpeed() method.
    }

    public function setWeight($weight)
    {
        // TODO: Implement setWeight() method.
    }

    public function addRobot(RobotInterface ...$robot)
    {
        $this->robots = array_merge($this->robots, $robot);
    }
}