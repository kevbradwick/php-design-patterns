# Singleton

The singleton pattern is useful when you want to limit the instance of an
object to one.

```
require_once __DIR__ . '/loader.php';

use Patterns\Singleton;

$obj1 = Singleton\Singleton::getInstance();
$obj2 = Singleton\Singleton::getInstance();
assert($obj1 === $obj2);
```

### PHP Design Patterns
[Back to all patterns](https://github.com/kevbradwick/php-design-patterns)