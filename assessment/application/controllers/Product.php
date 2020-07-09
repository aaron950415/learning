<?php
   
//http://mfikri.com/en/blog/crud-codeigniter-ajax
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}
	function index(){
		$this->load->view('product_view');
		
	}

	function product_data_student(){
		$data=$this->product_model->product_list_student();
		echo json_encode($data);
	}
	function product_data_resident(){
		$data=$this->product_model->product_list_resident();
		echo json_encode($data);
	}
	function product_data_bookings(){
		$data=$this->product_model->product_list_bookings();
		echo json_encode($data);
	}



	function bookings(){
		$data=$this->product_model->bookings();
		echo json_encode($data);
	}



	function save_student(){
		$data=$this->product_model->save_product_student();
		echo json_encode($data);
	}
	function save_resident(){
		$data=$this->product_model->save_product_resident();
		echo json_encode($data);
	}


	function update_student(){
		$data=$this->product_model->update_product_student();
		echo json_encode($data);
	}
	function update_resident(){
		$data=$this->product_model->update_product_resident();
		echo json_encode($data);
	}


	function delete_student(){
		$data=$this->product_model->delete_product_student();
		echo json_encode($data);
	}
	function delete_resident(){
		$data=$this->product_model->delete_product_resident();
		echo json_encode($data);
	}

}
