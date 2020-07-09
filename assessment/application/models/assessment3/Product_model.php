<?php
class Product_model extends CI_Model{

	function product_list_student(){
		$hasil=$this->db->get('student_availabilities');
		return $hasil->result();
	}

	function product_list_resident(){
		$hasil=$this->db->get('resident_availabilities');
		return $hasil->result();
	}
	function product_list_bookings(){
		$hasil=$this->db->get('bookings');
		return $hasil->result();
	}

	function save_product_student(){
		$data = array(
				's_id' 	=> $this->input->post('s_id'), 
				's_name' => $this->input->post('s_name'), 
				'date' 	=> $this->input->post('date'), 
				'time_from' => $this->input->post('time_from'), 
				'time_to' => $this->input->post('time_to'), 
				'suburb' => $this->input->post('suburb'), 
				'hourly_rate' => $this->input->post('hourly_rate'), 
				'type' => $this->input->post('type'), 
				's_phoneNumber' => $this->input->post('s_phoneNumber') 
			);
		$result=$this->db->insert('student_availabilities',$data);
		return $result;
	}
	function save_product_resident(){
		$data = array(
				'r_id' 	=> $this->input->post('r_id'), 
				'r_name' => $this->input->post('r_name'), 
				'date' 	=> $this->input->post('date'), 
				'time_from' => $this->input->post('time_from'), 
				'time_to' => $this->input->post('time_to'), 
				'suburb' => $this->input->post('suburb'), 
				'hourly_rate' => $this->input->post('hourly_rate'), 
				'type' => $this->input->post('type'), 
				'r_phoneNumber' => $this->input->post('r_phoneNumber') 
			);
		$result=$this->db->insert('resident_availabilities',$data);
		return $result;
	}

	function bookings(){
		$data = array(
				's_id' 	=> $this->input->post('s_id'), 
				'r_id' => $this->input->post('r_id'), 
				'booking_date' 	=> $this->input->post('booking_date'), 
				'booking_suburb' => $this->input->post('booking_suburb'), 
				'booking_price' => $this->input->post('booking_price'), 
			);
		$result=$this->db->insert('bookings',$data);
		return $result;
	}

	function update_product_student(){
		$s_id=$this->input->post('s_id');
		$s_name=$this->input->post('s_name');
		$date=$this->input->post('date');
		$time_from=$this->input->post('time_from');
		$time_to=$this->input->post('time_to');
		$suburb=$this->input->post('suburb');
		$hourly_rate=$this->input->post('hourly_rate');
		$s_phoneNumber=$this->input->post('s_phoneNumber');
		$type=$this->input->post('type');

		$this->db->set('time_to', $time_to);
		$this->db->set('date', $date);
		$this->db->set('time_from', $time_from);
		$this->db->set('suburb', $suburb);
		$this->db->set('hourly_rate', $hourly_rate);
		$this->db->set('s_phoneNumber', $s_phoneNumber);
		$this->db->set('type', $type);
		$this->db->set('s_name', $s_name);
		$this->db->where('s_id', $s_id);
		$result=$this->db->update('student_availabilities');
		return $result;
	}

	function update_product_resident(){
		$r_id=$this->input->post('r_id');
		$r_name=$this->input->post('r_name');
		$date=$this->input->post('date');
		$time_from=$this->input->post('time_from');
		$time_to=$this->input->post('time_to');
		$suburb=$this->input->post('suburb');
		$hourly_rate=$this->input->post('hourly_rate');
		$r_phoneNumber=$this->input->post('r_phoneNumber');
		$type=$this->input->post('type');

		$this->db->set('time_to', $time_to);
		$this->db->set('date', $date);
		$this->db->set('time_from', $time_from);
		$this->db->set('suburb', $suburb);
		$this->db->set('hourly_rate', $hourly_rate);
		$this->db->set('r_phoneNumber', $r_phoneNumber);
		$this->db->set('type', $type);
		$this->db->set('r_name', $r_name);
		$this->db->where('r_id', $r_id);
		$result=$this->db->update('resident_availabilities');
		return $result;
	}




	function delete_product_student(){
		$s_id=$this->input->post('s_id');
		$this->db->where('s_id', $s_id);
		$result=$this->db->delete('student_availabilities');
		return $result;
	}
	function delete_product_resident(){
		$r_id=$this->input->post('r_id');
		$suburb=$this->input->post('suburb');
		$this->db->where('r_id', $r_id);
		$this->db->where('suburb', $suburb);
		$result=$this->db->delete('resident_availabilities');
		return $result;
	}
	


}