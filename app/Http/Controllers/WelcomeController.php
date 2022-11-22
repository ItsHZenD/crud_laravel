<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function form()
    {
        $a = "Nhap o day";
        return view('test/form', [
            'a' => $a,
        ]);
    }
    public function post(Request $rq)
    {
        $a = $rq->get('a');
        return view('test/show', [
            'a' => $a
        ]);
    }
}
