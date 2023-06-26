<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Locale;

class InfoController extends Controller
{
    public function index()
    {
      $data = [
        "name" => "learning-vue test api",
        "description" => "Example api endpoint",
        "time" => NOW(),
        "locale" => Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? Locale::getDefault())
      ];

      return $data;
    }
}
