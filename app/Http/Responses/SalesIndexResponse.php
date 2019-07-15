<?php

namespace App\Http\Responses;
use App\Sales;
use Illuminate\Contracts\Support\Responsable ;
use Illuminate\Support\Collection;

class SalesIndexResponse implements Responsable
{

    public function toResponse($request)
    {
       return response()->json([
           'totalSales'=>$this->totalSales(),
           'totalRevenue'=>$this->totalRevenue(),
       ],200);
    }

    public function totalSales(){
        return Sales::count();
    }
    public function totalRevenue(){
        return Sales::sum('amount');
    }


}