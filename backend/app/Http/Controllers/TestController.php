<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function func() {

        $use = App\Users::find(1);
        $item = App\Users::find(1)->item()->orderBy('name')->get();

        foreach ($users->items as $item) {
            echo $item->pivot->created_at;
        }
    }
}
