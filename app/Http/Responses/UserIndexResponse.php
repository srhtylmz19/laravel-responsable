<?php

namespace App\Http\Responses;
use Illuminate\Contracts\Support\Responsable ;
use Illuminate\Support\Collection;

class ProductIndexResponse implements Responsable
{
    protected $products ;

    public function __construct(Collection $products)
    {
        $this->products = $products;
    }

    public function toResponse($request)
    {
        dd(2);
        return response()->json($this->transfromUsers(),200);
    }

    public function transfromUsers()
    {

    }

}