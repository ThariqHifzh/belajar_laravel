<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //method/function : kebisaan
    // visibilisasi : public, private, static
    public function index()
    {
        return "Haloo kami sedang belajar Laravel";
    }

    public function edit($id)
    {
        return "ini adalah form edit dengan nama params: " . $id;
    }
    public function delete($id)
    {
        return "ini adalah form delete dengan id: " . $id;
    }
}
