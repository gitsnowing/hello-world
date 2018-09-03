<?php
    
    require __DIR__ . '/vendor/autoload.php';
    
    $log = new Monolog\Logger('name');
    $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
    $log->addWarning('Foo');
    echo "<pre>";
    var_dump($log);
    echo '<hr>';
    
    $a = new \App\Abc();
    var_dump($a);