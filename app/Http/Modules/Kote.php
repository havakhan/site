<?php
/**
 * Created by PhpStorm.
 * User: hava
 * Date: 27.01.16
 * Time: 10:31
 */

namespace App\Http\Modules {


    class Kote
    {

        public $number;

        public static function getRandom()
        {
            return new Kote(rand(1,152));
        }

        public function __construct($number)
        {
            $this->number = $number;
        }

        public function __toString()
        {
            return '/images/kote/'.$this->number.'.gif';
        }

    }
}