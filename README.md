# php-points

[![github action status](https://github.com/hexlet-components/php-points/workflows/master/badge.svg)](https://github.com/hexlet-components/php-points/actions)

## Functions for working with Points

```php
<?php

use function PhpPoints\Points\makePoint;
use function PhpPoints\Points\getX;
use function PhpPoints\Points\getY;
use function PhpPoints\Points\toString;
```

## Examples

```php
<?php

$point = makePoint(1, 2);

$x = getX($point); // $x = 1;
$y = getY($point) // $y = 2;

$example = toString($point); // $example = "(1, 2)";
```

[![Hexlet Ltd. logo](https://raw.githubusercontent.com/Hexlet/hexletguides.github.io/master/images/hexlet_logo128.png)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-eloquent-blog)

This repository is created and maintained by the team and the community of Hexlet, an educational project. [Read more about Hexlet (in Russian)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-eloquent-blog).
