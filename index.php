<?php

    declare(strict_types=1);

    require_once 'vendor/autoload.php';

    require 'views/index.php';

    spl_autoload_register(function ($className) {
            if ($className === 'Alina\Oopexam\Framework\Database') {
                require './src/Framework/submit.php';
            }
        });

    use Alina\Oopexam\Framework\Database;

    $encoder = new Database();
    $encoder->fileEncoder();

    require './src/Framework/exception.php';
    use Alina\Oopexam\Framework\PaymentValidator;

    try {
        $valid = new PaymentValidator();
        $valid->validate();
    } catch (\Exception $exception) {
        echo 'Validation error: '.$exception->getMessage();
    }