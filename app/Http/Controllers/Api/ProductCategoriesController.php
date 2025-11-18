<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories; 
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    // Menampilkan semua kategori
    public function index()
    {
        $categories = ProductCategories::all();
        return response()->json($categories);
    }

    //  Menambahkan kategori baru
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $productCategory = ProductCategories::create($validateData);
        return response()->json([
            'message' => 'Kategori berhasil ditambahkan.',
            'data' => $productCategory
        ], 201);
    }

    // Menampilkan detail kategori berdasarkan ID
    public function show($id)
    {
        $category = ProductCategories::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        return response()->json($category);
    }

    // Mengupdate kategori
    public function update(Request $request, $id)
    {
        $category = ProductCategories::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $validateData = $request->validate([
            
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $category->update($validateData);

        return response()->json([
            'message' => 'Kategori berhasil diperbarui.',
            'data' => $category
        ]);
    }

    //  Menghapus kategori
    public function destroy($id)
    {
        $category = ProductCategories::find($id);

        if (!$category) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Kategori berhasil dihapus.']);
    }
}
