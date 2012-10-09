<?php
require 'miniRedis.php';
$redis = new miniRedis();
$redis->write('SET test abc');
$redis->write('GET test');
echo $redis->read(); // OK - result of 'SET test abc'
echo "\n";
echo $redis->read(); // abc - result of 'GET test'