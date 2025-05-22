<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function index(){
    // return view('berandas.home');
    // }

    public function index(Request $request)
{
    $kategoris = Kategori::all();
    $search = $request->get('search', '');
    $selectedCategory = $request->get('category', '');

    $produks = Produk::search($search)
        ->where('status', 'aktif')
        ->when($selectedCategory, function ($query, $selectedCategory) {
            if ($selectedCategory != 'all') {
                return $query->where('kategori_id', $selectedCategory);
            }
        })
        ->latest()
        ->paginate(4)
        ->withQueryString();

    return view('berandas.produk', compact('produks', 'search', 'kategoris', 'selectedCategory'));
}





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::with('himpunan')->findOrFail($id);
        return view('berandas.detail', compact('produk'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
