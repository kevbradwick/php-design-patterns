<?
/**
* CommandChain.
*
* @author Kevin Bradwick <kbradwick@gmail.com>
* @link https://github.com/kevbradwick/php-design-patterns
*
*/
class CommandChain
{
    private $_commands;

    public function __constructor()
    {
        $this->_commands = array();
    }
  
    public function addCommand($cmd)
    {
      $this->_commands[] = $cmd;
    }

    public function runCommand($name, $args)
    {
      foreach ($this->_commands as $cmd)
      {
        if ($cmd->onCommand($name, $args))
        {
          return;
        }
      }
    }
}
