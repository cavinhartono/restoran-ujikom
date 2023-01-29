<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $foods = Menu::paginate(10)->get();
        return view('menu.index');
    }

    public function create()
    {
        $title = "Add";
        $action = "store";
        $btn = "Simpan";

        return view('menu.form', compact(['action', 'btn', 'title']));
    }
}
