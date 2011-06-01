<?
require_once 'CommandChain.php';
require_once 'Commands/SmsCommand.php';
require_once 'Commands/MailCommand.php';

$cc = new CommandChain();

$params = array();

$cc->addCommand(new SMSCommand());
$cc->addCommand(new MailCommand());

$cc->runCommand('sendSMS',  $params);
$cc->runCommand('sendMail', $params);

