<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\crud;

class CrudController extends Controller
{
    public function firstPagee () {
        $item = DB::table('cruds')->limit(5)->where('active', '=' , '1')->orderBy('created_at', 'desc')->get();
        return view('welcome', ['item' => $item]);
    }

    public function second () {
        $item = crud::all();
        return view('secondPage' , ['item' => $item]);
    }
    public function readL ($id) {
        $item = crud::find($id);
        return view('readDesc', ['item' => $item]);

    }
    public function createandUpdate (Request $request, crud $item) {
        if ($request->input("title")) {
            $item->fill($request->all())->save();
            return redirect()->route('listofallitems');
    }
    return view('createandupdate', ["item" => $item]);
}

    public function delete (crud $item) {
        $item -> delete();
        return redirect()->route('listofallitems');
    }
}
