<?php
$db= new DB(Core::$DB_HOST,Core::$DB_LOGIN,Core::$DB_PASS,Core::$DB_NAME);

$row=$db->get_countries();
$row1=$db->get_city();

$row2=$db->get_lang1();