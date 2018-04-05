<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatNacionalidad;
use App\Http\Requests;

class LadaController extends Controller
{
	public function index()
	{
		$nacionalidades = CatNacionalidad::pluck('lada','id');
	}

	public function getLadas(Request $request, $id)
	{
        if($request->ajax()){
            $ladas = CatNacionalidad::lada($id);
            return response()->json($ladas);
        }
    }
}
