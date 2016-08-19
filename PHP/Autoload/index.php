<?php
    
    header('Content-type: text/html; charset=utf-8');
    date_default_timezone_set('Asia/Taipei');

    # 載入 autoloader 設定 
    include 'autoloader.php';

    use classes\Test AS TT;

    echo '<pre>';
    echo "\n ** 使用 autoloader.php 下的 config 來設定的 class ** \n";
    echo Demo::ClassName . "\n";

    echo "\n ** [ namespace ] 使用 use {path} 來設定 class 名稱 ** \n";
    echo TT::ClassName . "\n";

    echo "\n **  [ namespace ] 直接使用 {path} 調用 class ** \n";
    echo classes\MyDemo::ClassName;

