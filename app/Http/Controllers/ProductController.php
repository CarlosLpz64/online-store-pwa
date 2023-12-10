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

    public function getViewindex()
    {
        $data = Product::with('brand', 'category')->get();
        return view('home', ["data"=>$data]);
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

    public function getViewShow($id)
    {
        $data = Product::with('brand', 'category')->find($id);

        if (!$data) {
            return response()->json(['message' => 'Valor no encontrado'], 404);
        }
        return view('detail', ["data"=>$data]);
    }

    public function getViewSuccess()
    {
        return view('success');
    }

    public function filterUniqueIds($data)
    {
        $uniqueIds = array_values(array_unique($data));
        $mapIds = array_count_values($data);
        return [
            'uniqueIds' => $uniqueIds,
            'mapIds' => $mapIds,
        ];
    }
    public function getViewBasket()
    {
        $result = $this->filterUniqueIds([1,1,1,2,2,3,3,4,4,5]);
        $uniqueIds = $result['uniqueIds'];
        $mapIds = $result['mapIds'];
        $data = Product::with('brand', 'category')
            ->whereIn('id', $uniqueIds)
            ->get();
        $total = 0;

        foreach ($data as &$product) {
            $product['quantity'] = $mapIds[$product['id']];
            $total += $product['price'] * $product['quantity'];
        }

        return view('basket', ["data" => $data, "total" => $total]);
    }

    public function getViewBasketPost(Request $request)
    {
        $payloadIds = $request->input('basketIds', []);
        $result = $this->filterUniqueIds($payloadIds);
        $uniqueIds = $result['uniqueIds'];
        $mapIds = $result['mapIds'];
        $data = Product::with('brand', 'category')
            ->whereIn('id', $uniqueIds)
            ->get();
        $total = 0;

        foreach ($data as &$product) {
            $product['quantity'] = $mapIds[$product['id']];
            $total += $product['price'] * $product['quantity'];
        }

        return view('basket', ["data" => $data, "total" => $total]);
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
