<?php

namespace App\Http\Controllers;

use App\Article;
use App\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $article = DB::table('posting')
                    ->join('posting_language', 'posting_language.id_posting', '=', 'posting.id')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->where('posting_language.id_language', 1)
                    ->where('id_category', '<=', 58) 
                    ->paginate(6);

        return view('articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $article = DB::table('posting')
                    ->join('posting_language', 'posting_language.id_posting', '=', 'posting.id')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->where('posting.id', $id)
                    ->first();
        


        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
