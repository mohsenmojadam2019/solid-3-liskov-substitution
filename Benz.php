<?php

namespace App\Http\Controllers\Solid3;

class Benz extends Car
{

        public function drive(): array
        {
            return ['name'=>'Benz','speed' => '200km/h', 'color' => 'blue'];
        }

}
