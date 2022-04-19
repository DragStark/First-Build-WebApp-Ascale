<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use phpDocumentor\Reflection\Types\Self_;

class ProductService
{
    const LIMIT = 16;
    public function get($page = null)
    {

        return Product::select('id','name','price','price_sale','thumb')
            ->orderByDesc('id')
            ->when($page != null, function ($query) use ($page){
                $query->offset($page * Self::LIMIT);
            })
            ->limit(Self::LIMIT)
            ->get();

    }

    public function show($id)
    {
        return Product::where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->firstOrFail();

    }

    public function more($id)
    {
        return Product::select('id','name','price','price_sale','thumb')
            ->where('active', 1)
            ->where('id','!=',$id)
            ->orderByDesc('id')
            ->limit(4)
            ->get();
    }
}
