<?php
    defined('myeshop') or die('������ ��������!');
    $db_host		= 'localhost';
    $db_user		= 'admin';
    $db_pass		= '2521449Aa';
    $db_database	= 'db_shop'; 

    $link = mysql_connect($db_host,$db_user,$db_pass);

    mysql_select_db($db_database,$link) or die("��� ���������� � �� ".mysql_error());
    mysql_query("SET names cp1251");
?>