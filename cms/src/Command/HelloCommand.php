<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;

class HelloCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $io->out('Hello world.');
        debug("debug: LINE: ".__LINE__);
        $test = 111;
        $this->log("test : {$test}", 'info');

        /**
         * JSON Encode Log
         */
        $user = [
            'name' => '山田太郎',
            'age' => 20,
            'address' => '東京都新宿区',
        ];
        $this->log(__LINE__.' - '.json_encode($user, JSON_UNESCAPED_UNICODE), 'info');
        $this->log(__LINE__.' - '.json_encode($user, JSON_UNESCAPED_UNICODE), 'debug');
        $this->log(__LINE__.' - '.json_encode($user, JSON_UNESCAPED_UNICODE));

        /**
         * Array Log Integer
         */
        $numbers = array('+123123', '-123123', '1.2e3', '0.00001');
        $log_test = json_encode($numbers, JSON_NUMERIC_CHECK);
        $this->log($log_test, 'info');
    }
}
