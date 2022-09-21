<?php

namespace App\Http\Controllers;

use App\Models\Dummy;

class DummyController extends Controller {

    public function index() {
        return "Hello from the method : " . __METHOD__;
    }






}
