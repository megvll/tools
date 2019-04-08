<?php
require_once './vendor/autoload.php';
use megvll\php\Mx;

// Tools::href('http://baidu.com');

// Tools::json();

// Tools::logs();

// echo Tools::gukey();

// echo Tools::guid();

// echo Tools::order_num();

// Tools::curl();

// echo Tools::passed_time(time() - 60);

// echo Tools::decrypt();

// var_dump(Tools::build_tree());

echo '今天星期' . Mx::week2cn();