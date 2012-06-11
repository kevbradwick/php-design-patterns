# Adapter

The adapter pattern is useful for changing an objects existing interface for
use in new functionality.

```
require_once __DIR__ . '/loader.php';

use Patterns\Adapter;

$error = new Adapter\ErrorObject('500:Internal Server Error');
$logger = new Adapter\ConsoleLog($error);

// output the error message to stdout
$logger->write();

// adapt the existing ErrorObject to expose error code
$error = new Adapter\DetailedErrorAdapter('500:Internal Server Error');

// use the adapted ErrorObject using new functionality
$logger = new Adapter\EchoLog($error);
$logger->write();
```