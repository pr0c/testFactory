<?php

use Classes\FactoryRobot;
use Classes\Robots\MergeRobot;
use Classes\Robots\RobotTest;
use Classes\Robots\RobotTest2;

include 'Classes\FactoryRobot.php';
require_once 'Classes\Robots\RobotTest.php';
require_once 'Classes\Robots\RobotTest2.php';
require_once 'Classes\Robots\MergeRobot.php';

$factory = new FactoryRobot();

$factory->addType(new RobotTest());
$factory->addType(new RobotTest2());

var_dump($factory->createRoboTest(5));
var_dump($factory->createRobotTest2(2));
$mergeRobot = new MergeRobot();
$mergeRobot ->addRobot(new RobotTest2());
$mergeRobot ->addRobot($factory->createRobotTest2(2));
$factory->addType($mergeRobot);
$res = reset($factory->createMergeRobot(1));

echo $res->getSpeed();
echo $res->getWeight();

