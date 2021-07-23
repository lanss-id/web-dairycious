<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class IndexController extends Controller
{
    public function index(Request $request){
            $produk = DB::table('produk')
                ->join('produklanguage', 'produklanguage.id_produk', '=', 'produk.id')
                ->where('id_category', 68)
                ->where('id_language', 1)
                ->get();

            $mitra = DB::table('gallery')
                ->join('category', 'category.id', '=', 'gallery.id_category')
                ->where('id_category', 62)
                ->get();

            $galery = DB::table('gallery')
                ->join('category', 'category.id', '=', 'gallery.id_category')
                ->where('id_category', 63)
                ->get();

            $testimoni = DB::table('posting')
                ->join('category', 'category.id', '=', 'posting.id_category')
                ->join('posting_language', 'posting_language.id_posting', '=', 'posting.id')
                ->where('id_category', 64)
                ->where('posting_language.id_language', 1)
                ->get();

            $harga = DB::table('produk')
            ->join('category', 'category.id', '=', 'produk.id_category')
            ->join('produklanguage', 'produklanguage.id_produk', '=', 'produk.id')
            ->where('id_category', 69)
            ->where('produklanguage.id_language', 1)
            ->get();

            return view('index', compact('produk', 'mitra', 'galery', 'testimoni', 'harga'));
    }
}
