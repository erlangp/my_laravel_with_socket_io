<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function saveOrder()
    {
        event(new \App\Events\OrderCreatedEvent());

        return response('OK');
    }

}
