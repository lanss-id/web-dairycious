<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function reseller(Request $request)
    {
        $reseller = DB::table('posting')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->join('posting_language', 'posting_language.id_posting', '=', 'posting.id')
                    ->where('id_category', 65)
                    ->where('posting_language.id_language', 1)
                    ->get();
        
        $gambar = DB::table('posting')
                ->join('category', 'category.id', '=', 'posting.id_category')
                ->where('id_category', 65)
                ->first();
        
        $category = DB::table('posting')
                ->join('category', 'category.id', '=', 'posting.id_category')
                ->where('posting.id', 16)
                ->get();

        return view('reseller', compact('reseller', 'gambar', 'category'));
    }
    
    public function lokasiReseller()
    {
        
        return view('lokasi-reseller');
    }
    
    public function caraOrder()
    {
        $caraorder = DB::table('posting')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->join('posting_language', 'posting_language.id_posting', '=', 'posting.id')
                    ->where('id_category', 66)
                    ->where('posting_language.id_language', 1)
                    ->get();

        $gambar = DB::table('posting')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->where('id_category', 66)
                    ->first();
            
        $category = DB::table('posting')
                    ->join('category', 'category.id', '=', 'posting.id_category')
                    ->where('posting.id', 20)
                    ->get();

        return view('cara-order', compact('caraorder', 'gambar', 'category'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        $faqs = DB::table('pages')
                    ->join('category', 'category.id', '=', 'pages.id_category')
                    ->join('pages_language', 'pages_language.id_pages', '=', 'pages.id')
                    ->where('id_category', 67)
                    ->where('pages_language.id_language', 1)
                    ->get();

        return view('faq', compact('faqs'));
    }

    public function privacyPolicy()
    {
        $privacy = DB::table('pages')
                    ->join('category', 'category.id', '=', 'pages.id_category')
                    ->join('pages_language', 'pages_language.id_pages', '=', 'pages.id')
                    ->where('pages_language.id_language', 1)
                    ->get();

        return view('privacy-policy', compact('privacy'));
    }

}
