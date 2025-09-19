<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contacts()
    {
        return view('contatti');
    }
    public function prodotti()
    {
        $products = Product::where('is_published', true)->latest()->get();
        return view('prodotti', ['products' => $products]);
    }

    public function home()
    {
        $featuredProducts = Product::where('is_published', true)
        ->where('is_featured', true)
        ->latest()
            ->take(4)
            ->get();

        $services = Service::latest()->take(3)->get();

        return view('home', [
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

    public function chiSiamo()
    {
        $page = Page::where('slug', 'chi-siamo')->firstOrFail();

        return view('chi-siamo', ['page' => $page]);
    }
}
