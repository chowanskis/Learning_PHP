<?php
require_once 'libs/Smarty.class.php'; // dołączanie pakietu Smarty

$smarty = new Smarty(); // tworzenie egzemplarza klasy

// definicja katalogów roboczych
$smarty->setTemplateDir('smarty/templates'); // szablony
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->testInstall(); // test instalacji Smarty
?>