<?php

namespace Classes\Robots;


class MergeRobot
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

    public function addRobot($robot)
    {
        if(is_array($robot)) {
            $this->robots = array_merge($this->robots, $robot);
        }
        else $this->robots[] = $robot;
    }
}