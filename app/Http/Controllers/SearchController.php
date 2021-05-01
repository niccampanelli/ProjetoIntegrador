<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function makeSearch(Request $request){
        $q = $request->input('search_input');

        /*$bookArray = DB::table('biblio')
                            ->where('title', 'like', '%'. $q .'%')
                            ->orWhere('title_remainder', 'like', '%'. $q .'%')
                            ->orWhere('author', 'like', '%'. $q .'%')
                            ->orWhere('topic1', 'like', '%'. $q .'%')
                            ->orWhere('topic2', 'like', '%'. $q .'%')
                            ->orWhere('topic3', 'like', '%'. $q .'%')
                            ->orWhere('topic4', 'like', '%'. $q .'%')
                            ->orWhere('topic5', 'like', '%'. $q .'%')
                            ->get();*/

        $book = [
            ['name' => 'A Cabana', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 2', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 3', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 4', 'author' => 'William Paul Young'],
            ['name' => 'A Cabana 4', 'author' => 'William Paul Young']
        ];

        $data = [
            'query' => $q,
            'books' => $book
        ];

        return view('search')->with('data', $data);
    }
}
