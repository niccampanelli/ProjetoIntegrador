<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function makeSearch(Request $request){
        $q = $request->input('search_input');
        $sort = $request->input('sort');
        $dir = $request->input('dir');

        /*$bookArray = DB::table('biblio')
                            ->where('title', 'like', '%'. $q .'%')
                            ->orWhere('title_remainder', 'like', '%'. $q .'%')
                            ->orWhere('author', 'like', '%'. $q .'%')
                            ->orWhere('topic1', 'like', '%'. $q .'%')
                            ->orWhere('topic2', 'like', '%'. $q .'%')
                            ->orWhere('topic3', 'like', '%'. $q .'%')
                            ->orWhere('topic4', 'like', '%'. $q .'%')
                            ->orWhere('topic5', 'like', '%'. $q .'%')
                            ->paginate(25)
                            ->appends(['search_input' => $q]);*/


        $books = [
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
            ['a' => 'a'],
        ];

        $data = [
            'query' => $q,
            'books' => $books
        ];

        return view('search')->with('data', $data);
    }
}
