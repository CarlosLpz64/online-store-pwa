<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index()
    {
        $data = Brand::with('products')->get();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Brand::with('products')->find($id);

        if (!$data) {
            return response()->json(['message' => 'Valor no encontrado'], 404);
        }

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = Brand::create($request->all());
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        $data = Brand::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
