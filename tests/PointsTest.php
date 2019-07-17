<?php

namespace PhpPoints\tests;

use PHPUnit\Framework\TestCase;

use function PhpPoints\Points\makePoint;
use function PhpPoints\Points\getX;
use function PhpPoints\Points\getY;
use function PhpPoints\Points\toString;

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
}
