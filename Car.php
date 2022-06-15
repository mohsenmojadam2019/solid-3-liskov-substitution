<?php

namespace App\Http\Controllers\Solid3;

abstract class  Car implements CarInterface
{

    public function drive(): array
    {
        return ['title' => 'cars'];
    }

}
