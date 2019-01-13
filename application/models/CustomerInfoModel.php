<?php


class CustomerInfoModel extends CI_Model{

    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function get_CustomerInfo(){
        
        $query = $this->db->get("custinfo");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'country' => $this->input->post('country'),
            'email' => $this->input->post('email'),
            'mobile_no' => $this->input->post('mobile_no'),
            'about_you' => $this->input->post('about_you'),
            'dob' => $this->input->post('dob')
        );
        return $this->db->insert('custinfo', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'country' => $this->input->post('country'),
            'email' => $this->input->post('email'),
            'mobile_no' => $this->input->post('mobile_no'),
            'about_you' => $this->input->post('about_you'),
            'dob' => $this->input->post('dob')
        );
        if($id==0){
            return $this->db->insert('custinfo',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('custinfo',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('custinfo', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('custinfo', array('id' => $id));
    }
}
?>