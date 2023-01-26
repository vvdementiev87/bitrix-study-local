<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';
$APPLICATION->SetTitle("Title");
dd(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));
?>
Hello world 2
<?php
require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
