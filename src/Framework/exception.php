<?php

    declare(strict_types=1);

    namespace Alina\Oopexam\Framework;

    use Alina\Oopexam\Framework\Database;

    class PaymentValidator extends Database {

        public $month;

        public function validate(string $month): void {
            if ($month === 'Rugpjūtis') {
                throw new \Exception('Jūs veluojate sumokėti mokesčius 40 dienų');
            }

            if ($month === 'Spalis') {
                throw new \Exception('Jūs atliekate mokėjimą per anksti');
            }

            if ($month === 'Lapkritis') {
                throw new \Exception('Jūs atliekate mokėjimą per anksti');
            }

            if ($month === 'Gruodis') {
                throw new \Exception('Jūs atliekate mokėjimą per anksti');
            }
            else {
                echo 'Mokėjimas už Rugsėjį atliktas';
            }
        }
    }
