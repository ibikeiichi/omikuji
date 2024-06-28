<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Omikuji;

class OmikujiController extends Controller
{
    public function index()
    {
        return view('omikuji');
    } 
    public function omikuji(Omikuji $omikuji)
    {
        $result=Omikuji::inRandomOrder()->first();
        return view('result')->with(['omikuji'=>$result]);
    } 
}
