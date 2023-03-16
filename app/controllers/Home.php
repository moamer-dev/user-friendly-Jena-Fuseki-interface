<?php 

/**
 * home class
 */
class Home extends Controller
{
	
	public function index()
	{

		$data['title'] = "Home";

		$this->view('dashboard',$data);
	}
	

	public function ckan1153($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('ckan1153',$data);
	}

	public function ckan1153table($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('ckan1153table',$data);
	}
	public function ckan1368($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('ckan1368',$data);
	}
	public function ckan1368table($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('ckan1368table',$data);
	}
	public function smw1153($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('smw1153',$data);
	}
	public function smw1153table($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('smw1153table',$data);
	}
	public function smw1368($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('smw1368',$data);
	}
	public function smw1368table($action = null)
	{


		$data = [];
		$data['action'] = $action;
		
		$this->view('smw1368table',$data);
	}
	
}
