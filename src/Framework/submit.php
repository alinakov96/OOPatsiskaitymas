<?php

    declare(strict_types=1);

    namespace Alina\Oopexam\Framework;

    use Alina\Oopexam\Framework\PaymentValidator;

    class Database {

        public $amount;
        public $rate;
        public $daytime;
        public $month;

        public function fileEncoder() {

            $amount = $_POST['amount'];
            $rate = $_POST['rate'];
            $daytime = $_POST['daytime'];
            $month = $_POST['month'];

            $fileContent = file_get_contents('views/bills.json');
            $deserializationData = json_decode($fileContent, true);
            if($deserializationData === NULL) {
                $deserializationData = [];
            }

            array_push($deserializationData, ['amount' => $amount, 'rate' => $rate,
                'daytime' => $daytime, 'month' => $month]);

            $serialization = json_encode($deserializationData, JSON_PRETTY_PRINT);

            file_put_contents('views/bills.json', $serialization);
        }
    }

    echo 'Skaičiuojama...';
    
