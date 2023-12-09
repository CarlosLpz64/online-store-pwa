<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Product::with('brand', 'category')->get();
        return response()->json($data);
    }

    public function getCart(Request $request)
    {
        $payloadIds = $request->input('ids', []);
        if (empty($payloadIds)) {
            return response()->json(['message' => 'No se proporcionaron IDs'], 400);
        }
        $data = Product::with('brand', 'category')
            ->whereIn('id', $payloadIds)
            ->get();
        return response()->json($data);
    }

    public function show($id)
    {
        $data = Product::with('brand', 'category')->find($id);

        if (!$data) {
            return response()->json(['message' => 'Valor no encontrado'], 404);
        }

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = Product::create($request->all());
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
