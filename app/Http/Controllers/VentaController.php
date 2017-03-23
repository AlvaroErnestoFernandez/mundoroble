<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VentaController extends Controller
{
    //
    public function getIndex()
	{
		return view('ventas.index');
	}
	public function getVentasdeldia()
	{
		return view('ventas.deldia');
	}
	public function getCrear()
	{
		return view('ventas.crear');
	}
	public function postCrear(Request $request)
	{
		return view('ventas.crear');
	}	
	public function getVenta($id)
	{
		return view('ventas.venta', ['rbo' => $id]);
	}
}
