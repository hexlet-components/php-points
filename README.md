# php-pairs

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
