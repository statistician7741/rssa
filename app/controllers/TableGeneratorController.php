<?php 

class TableGeneratorController extends BaseController{

	public function index(){
		return View::make('pages.tableGenerator');
	}

	public function getAwal(){
		$results = DB::select('select * from users', array(1));
		return Response::json(['ok' => 'yes', 'name' => $nameId, 'id' => $key]);
	}

}