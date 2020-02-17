<?php
echo date('Y年m月d日 H時i分s秒');
echo time();

echo PHP_EOL;
date_default_timezone_set('Asia/Tokyo');
echo date_default_timezone_get();
echo date("Y-m-d H:i:s");