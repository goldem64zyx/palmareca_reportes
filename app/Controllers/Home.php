<?php

namespace App\Controllers;
use App\Models\DatosModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new DatosModel();
		$res = $model->listar();
		$datos = [
			"datos" => $res,

		];
		return view('welcome_message',$datos);
	}
}
