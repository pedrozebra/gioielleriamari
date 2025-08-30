<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function whoWeAre()
    {
        return view('chi-siamo');
    }

    public function contatti()
    {
        return view('contatti');
    }
    public function prodotti()
    {
        // Recupera tutti i prodotti dal database, dal più recente al più vecchio
        $products = Product::latest()->get();

        // Passa la variabile $products alla vista
        return view('prodotti', ['products' => $products]);
    }
}
