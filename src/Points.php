<?php

namespace Php\Points\Points;

/**
 * Creates a point with two coordinates
 * @param int $x
 * @param int $y
 * @return array
 */
function makePoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

/**
 * Extracts x coordinate from point
 * @param array $point
 * @return int
 */
function getX($point)
{
    return $point['x'];
}

/**
 * Extracts y coordinate from point
 * @param array $point
 * @return int
 */
function getY($point)
{
    return $point['y'];
}

/**
 * Converts given point to string
 * @param array $point
 * @return string
 */
function toString($point)
{
    $x = getX($point);
    $y = getY($point);

    return "($x, $y)";
}

/**
 * Returns the quadrant number
 * @param array $point
 * @return int
 */
function getQuadrant($point)
{
    $x = getX($point);
    $y = getY($point);

    if ($x > 0 && $y > 0) {
        return 1;
    } if ($x < 0 && $y > 0) {
        return 2;
    } if ($x < 0 && $y < 0) {
        return 3;
    } if ($x > 0 && $y < 0) {
        return 4;
    }

    return null;
}
