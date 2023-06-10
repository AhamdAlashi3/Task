<?php

namespace App\Http\Controllers;

use App\Models\QRcod;
use Illuminate\Http\Request;

class QRcodController extends Controller
{
    //
    public function index(){
        $qr= QRcod::all();
        return view('index',compact('qr'));
    }
}
