<?php
class Userprojects_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_userproject($id = FALSE, $id2 = FALSE)
  {
    if ($id === FALSE && $id2 === FALSE) {
      $query = $this->db->get('tbl_userproject');
      return $query->result_array();
    }

    $query = $this->db->get_where('tbl_userproject', array('username' => $id, 'custproject' => $id2));
    return $query->row_array();
  }

  public function set_userprojects()
  {
    $data = array(
      'username' => $this->input->post('username'),
      'custproject' => $this->input->post('custproject'),
      'statususer' => $this->input->post('statususer')
    );

    return $this->db->insert('tbl_userproject', $data);
  }

  public function update_userprojects($id,$id2)
  {
    $data = array(
      'custproject' => $this->input->post('custproject'),
      'statususer' => $this->input->post('statususer')
    );
    // die($data);
    $array = array('username' => $id, 'custproject' => $id2);
    $this->db->where($array);
    return $this->db->update('tbl_userproject', $data);
  }
}
