<?php

namespace PhpPoints\Points;

function makePoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

function getX($point)
{
    return $point['x'];
}

function getY($point)
{
    return $point['y'];
}

function toString($point)
{
    $x = getX($point);
    $y = getY($point);

    return "($x, $y)";
}

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
