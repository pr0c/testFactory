<?php

namespace Interfaces;

interface RobotInterface
{
    public function setSpeed($speed);
    public function setWeight($weight);
    public function setHeight($height);

    public function getSpeed();
    public function getWeight();
    public function getHeight();
}