<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
//Vb1tgJLVCyhMX8VWYrX4zh1SloQCHjZhHKbWGaP6
class BookController extends Controller
{
    public function getbooks(Request $request){
          $response = Http::withHeaders([
           'Authorization' => 'Bearer Vb1tgJLVCyhMX8VWYrX4zh1SloQCHjZhHKbWGaP6',
            
        ])->get('https://api.packt.com/api/v1/products');
         $product=$response->json();
         if(empty($product)){
         	return false;
         }
         $filter_products=$product['products'];
         $count=count($filter_products);
         $perPage = 5; // How many items do you want to display.
         $currentPage = $request->page ?? 1; // The index page.
          $offset = ($currentPage-1) * $perPage;
        $products = array_slice($filter_products, $offset, $perPage);
         $book = new LengthAwarePaginator($products, $count, $perPage, $currentPage,['path'  => $request->url(),'query' => $request->query()]);
          //dd($book);
         return view('books',compact('book'));
    }
}
