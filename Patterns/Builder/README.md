# Builder

The builder pattern is used to build objects that may have complex
configurations. The builder class itself differs from the similar Factory
in that it represents one single concrete instance. Inside the builder class
you have the opportunity to check configuration options prior to building the
concrete class.

```
$builder = new \Patterns\Builder\ProductBuilder(array('colour' => 'red'));
$builder->build();
$builder->getProduct();
```

### PHP Design Patterns
[Back to all patterns](https://github.com/kevbradwick/php-design-patterns)