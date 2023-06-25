<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
      $data = [
        "name" => "learning-vue test api",
        "description" => "Example api endpoint",
        "time" => NOW()
      ];

      return $data;
    }
}
