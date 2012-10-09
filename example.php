<?php
require 'miniRedis.php';
$redis = new miniRedis();
$redis->write('set test abc');
$redis->write('get test');
echo $redis->read(); // OK - result of 'set test abc'
echo "\n";
echo $redis->read(); // abc - result of 'get test'