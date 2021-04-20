<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function makeSearch(Request $request){
        $q = $request->input('search_input');
        $book = [
            ['name' => 'A Cabana', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 2', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 3', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 4', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 4', 'author' => 'William Paul Young']

        ];
        $data = [
            'query' => $q,
            'book' => $book
        ];

        return view('search')->with('data', $data);
    }
}
