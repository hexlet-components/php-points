# php-pairs

[![Build Status](https://travis-ci.org/hexlet-components/php-pairs.svg?branch=master)](https://travis-ci.org/hexlet-components/php-points)
[![Code Climate](https://codeclimate.com/github/hexlet-components/php-pairs/badges/gpa.svg)](https://codeclimate.com/github/hexlet-components/php-points)
[![Issue Count](https://codeclimate.com/github/hexlet-components/php-pairs/badges/issue_count.svg)](https://codeclimate.com/github/hexlet-components/php-points)


### Functions for working with Points

```php
<?php

use function PhpPoints\Points\makePoint;
use function PhpPoints\Points\getX;
use function PhpPoints\Points\getY;
use function PhpPoints\Points\toString;
```

### Examples

```php
<?php

$point = makePoint(1, 2);

$x = \PhpPoints\Points\getX($point); // $x = 1;
$y = \PhpPoints\Points\getY($point) // $y = 2;

$example = toString($point); // $example = "(1, 2)";
```
