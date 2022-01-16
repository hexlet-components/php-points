<?php

namespace Php\Points\tests;

use PHPUnit\Framework\TestCase;

use function Php\Points\Points\makePoint;
use function Php\Points\Points\getX;
use function Php\Points\Points\getY;
use function Php\Points\Points\toString;
use function Php\Points\Points\getQuadrant;

class PointsTest extends TestCase
{
    public function testMakePoints()
    {
        $points1 = makePoint(1, 8);
        $points2 = makePoint(-6, 0);

        $this->assertEquals(1, getX($points1));
        $this->assertEquals(8, getY($points1));
        $this->assertEquals(-6, getX($points2));
        $this->assertEquals(0, getY($points2));
    }

    public function testToString()
    {
        $points1 = makePoint(1, 8);
        $points2 = makePoint(-6, 0);

        $this->assertEquals("(1, 8)", toString($points1));
        $this->assertEquals("(-6, 0)", toString($points2));
    }

    public function testGetQuadrant()
    {
        $point1 = makePoint(0, 0);
        $point2 = makePoint(5, 0);
        $point3 = makePoint(1, 5);
        $point4 = makePoint(-3, 10);
        $point5 = makePoint(-2, -5);
        $point6 = makePoint(4, -1);

        $this->assertEquals(null, (getQuadrant($point1)));
        $this->assertEquals(null, (getQuadrant($point2)));
        $this->assertEquals(1, (getQuadrant($point3)));
        $this->assertEquals(2, (getQuadrant($point4)));
        $this->assertEquals(3, (getQuadrant($point5)));
        $this->assertEquals(4, (getQuadrant($point6)));
    }
}
