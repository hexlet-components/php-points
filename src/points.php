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
