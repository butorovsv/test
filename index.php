<?php
require 'vendor/autoload.php';
use Lib\CountTag;

$ob = new CountTag();
$countTags = $ob->setDomain('https://google.com/')->exec();

echo sprintf('Количество тегов на домене `%s`: %d', $ob->getDomain(), $countTags);