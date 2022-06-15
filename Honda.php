<?php

namespace App\Http\Controllers\Solid3;

class Honda extends Car
{

    public function drive(): array
    {
        return ['name'=>'Honda','speed' => '100km/h', 'color' => 'red'];
    }
}
