# php-points

[![github action status](https://github.com/hexlet-components/php-graphs/workflows/PHP%20CI/badge.svg)](../../actions)

## Functions for working with Points

```php
<?php

use function Php\Points\Points\makePoint;
use function Php\Points\Points\getX;
use function Php\Points\Points\getY;
use function Php\Points\Points\toString;
```

## Examples

```php
<?php

$point = makePoint(1, 2);

$x = getX($point); // $x = 1;
$y = getY($point) // $y = 2;

$example = toString($point); // $example = "(1, 2)";
```

[![Hexlet Ltd. logo](https://raw.githubusercontent.com/Hexlet/assets/master/images/hexlet_logo128.png)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-points)

This repository is created and maintained by the team and the community of Hexlet, an educational project. [Read more about Hexlet (in Russian)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-points).
