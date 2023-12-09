<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::with('products')->get();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Category::with('products')->find($id);

        if (!$data) {
            return response()->json(['message' => 'Valor no encontrado'], 404);
        }

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = Category::create($request->all());
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
