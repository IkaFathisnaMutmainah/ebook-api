<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => '3103120110',
            'Nama' => 'Ika Fathisna Mutmainah',
            'Phone' => '082340208345',
            'Class' => 'XII RPL 4'
        ];
    }
};
