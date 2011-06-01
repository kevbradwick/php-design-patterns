<?
require_once 'CommandInterface.php';

class SMSCommand implements CommandInterface
{
  public function onCommand($name, $args)
  {   
      if ($name != 'sendSMS') 
      {
        return false;
      }
      
      echo("SMSCommand handling '$name'\n");
      
      return true;
  }
}
