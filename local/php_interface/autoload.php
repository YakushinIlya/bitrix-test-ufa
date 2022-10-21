<?php
session_start();
Bitrix\Main\Loader::registerAutoLoadClasses(null, [
    'elements\BXiblockElementFilterData' => '/local/php_interface/elements/BXiblockElementFilterData.php'
]);