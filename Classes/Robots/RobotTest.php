<?php

namespace Classes\Robots;

require_once 'Interfaces/RobotInterface.php';

use Interfaces\RobotInterface;

class RobotTest implements RobotInterface
{
    private $height;
    private $speed;
    private $weight;

    public function __construct()
    {
        $this->height = rand(50, 200);
        $this->speed = rand(5, 25);
        $this->weight = rand(50, 120);
    }

    public function setHeight($height)
    {
        return $this->height = $height;
    }

    public function setSpeed($speed)
    {
        return $this->speed = $speed;
    }

    public function setWeight($weight)
    {
        return $this->weight = $weight;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}