# Delegate

The delegate pattern can be used in place of log if/else conditional
statements. You can usually spot where a delegate pattern comes in handy when
you notice you access an object through several methods that have subtle
differences in their output and you use conditionals if/else in another part
of the application.


```
require_once __DIR__ . '/loader.php';

use Patterns\Delegate;

// create a new playlist, stating the output format we want
$playlist = new Delegate\Playlist('M3U');
$playlist->addSong('/path/to/GoodLife.mp3', 'Good Life');
$playlist->addSong('/path/to/Shout.mp3', 'Shout');
$playlist->addSong('/path/to/Secrets.mp3', 'Secrets');

echo $playlist->getPlaylist(); // will give us #EXTM3U...
```

### PHP Design Patterns
[Back to all patterns](https://github.com/kevbradwick/php-design-patterns)