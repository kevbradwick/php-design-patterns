<?
require_once 'CommandInterface.php';

class MailCommand implements CommandInterface
{
  public function onCommand($name, $args)
  {   
      if ($name != 'sendMail') 
      {
        return false;
      }
     
      echo("MailCommand handling '$name'\n");
      
      return true;
  }
}
