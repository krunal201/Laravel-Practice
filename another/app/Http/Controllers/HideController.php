<?php

namespace App\Http\Controllers;

use Crypt;
use Illuminate\Http\Request;

class HideController extends Controller
{
    public function enc($st){
        $a=Crypt::encryptString($st);
        echo "Parameter after encryption: $a";
        return view("third");
    }

    public function dec($st){
        $a=Crypt::decryptString($st);
        echo "<br>Decryted value: $a";
    }
}
