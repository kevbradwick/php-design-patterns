# Adapter

The adapter pattern is useful for changing an objects existing interface for
use in new functionality.

## The example

The existing classes `ErrorObject` and `ConsoleLog` work together to output a
message to standard out. A new logger, `EchoLog` will echo out the error object
and set HTTP headers based on the status code. The `DetailedErrorAdapter`
extends the existing `ErrorObject` to expose the status code and introduces a
new method, `getErrorCode`, which is then used by `EchoLog`.

The advantage of using the Adapter pattern is so that the existing
implementation remains untouched leaving regression failures an impossibility.