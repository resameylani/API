<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ApiController extends Controller
{
    Public function produk_index(){
        $produk = produk::get();
        return response()->json($produk);
    }
    public function produk_store(Request $request){
        produk::insert([
            'produk'    =>$request->api_produk,
            'price'     =>$request->api_price,
            'stock'     =>$request->api_stock,
        ]);

        $response = array(
            'responseCode'    => '00',
            'responseStatus'  => 'Success'
        );
        return response()->json($response);
    }
    public function produk_by_id($id){
        $produk = produk::where('id', $id)->get();
        return response()->json($produk);
    }
    public function produk_delete($id){
        produk::where('id',$id)->delete();

        $response=array(
            'responseCode'      =>'00',
            'responseStatus'    =>'succes delete'
        );
        return response()->json($response);
    }
    public function produk_update(Request $request, $id){        
        // Validasi request
        $request->validate([
            'api_produk' => 'required',
            'api_price'   => 'required|numeric',
            'api_stock'   => 'required|integer',
        ]);
    
        // Update data produk
        Produk::where('id', $id)->update([
            'produk' => $request->api_produk,
            'price'   => $request->api_price,
            'stock'   => $request->api_stock,
        ]);
    
        // Response sukses
        $response = array(
            'responseCode'   => '00',
            'responseStatus' => 'Success Update'
        );
        return response()->json($response);
    }

}
