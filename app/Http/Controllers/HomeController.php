<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        // выбирает рандомные фото (это пока что) а так должен будет выбирать из рекомендаций пользователя

        return view('app');
    }
}
