<?php
class Crud extends CI_Model{

	public function getRecord(){
		$query = $this->db->get('employees');
		if ($query->num_rows()>0) {
			return $query->result_array();
		}
	}

	public function store()
    {    
        $data = [
            'name'        => $this->input->post('name'),
            'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'designation' => $this->input->post('designation')
        ];
 
        $result = $this->db->insert('employees', $data);
        return $result;
    }

	public function get($id)
    {
        $employee = $this->db->get_where('employees', ['id' => $id ])->row();
        return $employee;
    }

	public function update($id) 
    {
        $data = [
            'name'        => $this->input->post('name'),
            'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'designation' => $this->input->post('designation')
        ];
 
        $result = $this->db->where('id',$id)->update('employees',$data);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('employees', array('id' => $id));
        return $result;
    }
}


?>
