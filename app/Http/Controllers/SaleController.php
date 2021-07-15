<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;

class SaleController extends Controller
{
	public function index(Request $request)
	{
		if (!$request->ajax()) abort( 404 );

		return [ 'Sales' => Sale::all() ];
	}

	public function sales()
	{
		return view('sales.index');
	}

	public function store(Request $request)
	{
		$create = Sale::create($request->all());
		return response()->json($create);
	}

	public function update(Request $request, $Sale)
	{
		$edit = Sale::find($Sale)->update($request->all());
		return response()->json($edit);
	}

	public function destroy($Sale)
    {
        Sale::find($Sale)->delete();
        return response()->json(['ok']);
    }
}
