<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function whoWeAre()
    {
        return view('chi-siamo');
    }

    public function contacts()
    {
        return view('contatti');
    }
    public function products()
    {
        $products = Product::latest()->get();

        return view('prodotti', ['products' => $products]);
    }

    public function home()
    {
        $featuredProducts = Product::latest()->take(4)->get();
        $services = Service::latest()->take(3)->get();

        return view('welcome', [
            'featuredProducts' => $featuredProducts,
            'services' => $services,
        ]);
    }

    public function show(Page $page)
    {
        if (!view()->exists('templates.' . $page->template)) {
            abort(404);
        }
        return view('templates.' . $page->template, ['page' => $page]);
    }
}
