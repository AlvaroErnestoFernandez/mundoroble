<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductoController extends Controller
{
	//
    public function getIndex()
	{
		return view('productos.index');
	}
	public function getPendientes()
	{
		return view('productos.pendientes');
	}
	public function getEntregados()
	{
		return view('productos.entregados');
	}
	public function getCrear()
	{
		return view('productos.crear');
	}	
	public function postCrear(Request $request)
	{
		return view('productos.crear');
	}	
	public function getProducto($id)
	{
		return view('productos.producto', ['id' => $id]);
	}
}
