<?php

include 'Classes\FactoryRobot.php';
require_once 'Classes\Robots\RobotTest.php';
require_once 'Classes\Robots\MergeRobot.php';

$factory = new \Classes\FactoryRobot();
$factory->addType(new \Classes\Robots\RobotTest());
$testRobot = $factory->createRobotTest();
$testRobot1 = $factory->createRobotTest();

$mergeRobot = new \Classes\Robots\MergeRobot();
$mergeRobot->addRobot($testRobot);
$mergeRobot->addRobot($testRobot1);
echo $mergeRobot->getHeight() . " | " . $mergeRobot->getWeight() . " | " .$mergeRobot->getSpeed();