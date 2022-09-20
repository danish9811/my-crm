<?php

namespace App\Http\Controllers;

class DummyController extends Controller {

    public function index() {
        return "Hello from the method : " . __METHOD__;
    }

}
