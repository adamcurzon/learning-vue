<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

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

    public function pdfTest(): Response
    {
        $pdf = Pdf::loadView('pdf');
        return $pdf->stream('invoice.pdf');
    }

    public function trueFalse(): string {
        return round(rand(0,1)) == 1 ? "false" : "true";
    }
}
