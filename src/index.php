<?php
require_once __DIR__.'/../vendor/autoload.php';
use \App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\SystemDialog;
use \App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\WebDialog;
use \App\OOP\PHP\Patterns\Creational\FactoryMethod\DialogExample\Dialogs\MobileDialog;

//$systemDialog = new SystemDialog();
//$webDialog = new WebDialog();
//$mobileDialog = new MobileDialog();
//var_dump($systemDialog->renderDialog());
//var_dump($mobileDialog->renderDialog());
//var_dump($webDialog->renderDialog());

$setting = \App\OOP\PHP\Patterns\Singleton\AppSettings::getInstance();
var_dump($setting::getConfig('Database'));