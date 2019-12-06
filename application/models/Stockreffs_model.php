<?php
class Stockreffs_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_stockreff($id = FALSE)
  {
    if ($id === FALSE) {
      $query = $this->db->get('tbl_stock_reffno');
      return $query->result_array();
    }

    $query = $this->db->get_where('tbl_stock_reffno', array('reffno' => $id));
    return $query->row_array();
  }

  public function set_stockreffs()
  {
    $data = array(
      'reffno' => $this->input->post('reffno'),
      'usestatus' => $this->input->post('usestatus')
    );

    return $this->db->insert('tbl_stock_reffno', $data);
  }

  public function update_stockreffs($id)
  {
    $data = array(
      'usestatus' => $this->input->post('usestatus')
    );
    $this->db->where('reffno', $id);
    return $this->db->update('tbl_stock_reffno', $data);
  }
}
