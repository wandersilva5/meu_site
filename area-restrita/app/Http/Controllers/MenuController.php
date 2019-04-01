<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    
    public function index()
    {
        $menu_list = Menu::all();
        
        return view('menu.index', compact('menu_list'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    public function destroy($id)
    {
        //
    }
}
