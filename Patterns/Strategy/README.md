# Strategy

A strategy is useful when traditional inheritance by extending the base class
is not an option as you want to add sometimes complex logic to the object. You
can usually tell when a strategy pattern would help if there are a lot of
if/else conditional statements in your code.


```
use Patterns\Strategy;

$cd = new Strategy\CD('Muse', 'Black Holes');
$cd->setStrategyContext(new Strategy\Formats\Json());
echo $cd->get();
```

### PHP Design Patterns
[Back to all patterns](https://github.com/kevbradwick/php-design-patterns)