<?php

namespace App\Http\Controllers;

use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;

class Products extends Controller
{
    public function create(Request $request)
    {
        try {
            $request->validate([
                'name'      => 'required|string',
                'description'      => 'required|string',
            ]);

            $products = ModelsProducts::create([
                'name'      => $request->name,
                'description'      => $request->description,
            ]);

            $products->save();

            return redirect('/');
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function delete($id)
    {
        $products = ModelsProducts::find($id);
        $products->delete();

        return redirect('/');
    }

    public function edit($id, Request $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'description'      => 'required|string',
        ]);

        $products = ModelsProducts::find($id);

        $products->name = $request->name;
        $products->description = $request->description;

        $products->save();

        return redirect('/');
    }
}
