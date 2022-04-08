<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QrCodeController extends Controller
{
    public function index(){
        return view('qrcode');
    }
}
