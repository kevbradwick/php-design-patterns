# Decorator

The decorator pattern is used for altering parts of an existing object without
modifying the original. They are said to 'Decorate' behaviours.

```
require_once __DIR__ . '/loader.php';

use Patterns\Decorator;

$greeting = new Decorator\Greeting('World');
echo $greeting->sayHello(); // "Hello World"

// uppercase decorator
$decorator = new Decorator\Decorators\UpperCaseDecorator($greeting);
echo $decorator->sayHello(); // "HELLO WORLD"

// reverse decorator
$decorator = new Decorator\Decorators\ReverseDecorator($greeting);
echo $decorator->sayHello(); // "dlroW olleH"
```

### PHP Design Patterns
[Back to all patterns](https://github.com/kevbradwick/php-design-patterns)