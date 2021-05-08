<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function makeSearch(Request $request){
        $q = $request->input('search_input');
        $sort = $request->input('order') ?? 'title';
        $dir = $request->input('direction') ?? 'asc';

        $bookArray = DB::table('biblio')
                            ->where('title', 'like', '%'. $q .'%')
                            ->orWhere('title_remainder', 'like', '%'. $q .'%')
                            ->orWhere('author', 'like', '%'. $q .'%')
                            ->orWhere('topic1', 'like', '%'. $q .'%')
                            ->orWhere('topic2', 'like', '%'. $q .'%')
                            ->orWhere('topic3', 'like', '%'. $q .'%')
                            ->orWhere('topic4', 'like', '%'. $q .'%')
                            ->orWhere('topic5', 'like', '%'. $q .'%')
                            ->orderBy($sort, $dir)
                            ->paginate(25)
                            ->appends(['search_input' => $q])
                            ->appends(['order' => $sort])
                            ->appends(['direction' => $dir]);


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
            'books' => $bookArray
        ];

        return view('search')->with('data', $data);
    }
}
