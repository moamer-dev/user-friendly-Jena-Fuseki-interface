<?php 

/**
 * home class
 */
class Sparql extends Controller
{
	
	public function index()
	{

		$data['title'] = "SPARQL";

		$this->view('sparql',$data);
	}
	
}