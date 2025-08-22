<?php
$base = '/unitconverter/';
if (isset($_SERVER['HTTP_X_BASE_URL']) && $_SERVER['HTTP_X_BASE_URL']!=='') {$base = rtrim($_SERVER['HTTP_X_BASE_URL'],'/').'/';}
define('BASE_URL',$base);
