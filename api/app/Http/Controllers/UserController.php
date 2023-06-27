<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\HttpFoundation\Cookie;

class UserController extends Controller
{
    private string $key = "123";

    /**
     * @param Request $request
     * @return string|null
     */
    public function index (Request $request): ?string
    {
        $payload = [
            // Issuer (me)
            'iss' => 'https://ec2.adamcurzon.co.uk/',
            // Audience (user)
            'aud' => $request->ip(),
            // Issued at (now)
            'iat' => Carbon::now()->timestamp,
            // Expiry (1 day)
            'exp' => Carbon::now()->addDays(1)->timestamp,
            // Access token
            'access_token' => "456"
        ];

        $jwt = JWT::encode($payload, $this->key, 'HS256');
        var_dump($jwt);

        $decoded = JWT::decode($jwt, new Key($this->key, 'HS256'));
        print_r($decoded);

        return null;
    }

    public function cookie(){
        return response('Hello World')->cookie(
            'key', '123', '123', '/', 'https://ec2.adamcurzon.co.uk/',false,false
        );
    }
}
