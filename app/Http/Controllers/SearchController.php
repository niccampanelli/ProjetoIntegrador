<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function makeSearch(Request $request){
        $q = $request->input('search_input');
        return view('search')->with('query', $q);
    }
}
