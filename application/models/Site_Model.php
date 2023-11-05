
<?php

class Site_Model extends CI_Model
{

  public function insert($data)
  {
    $this->db->insert('user_message', $data);
  }

  public function get_all_news()
  {

    return  $this->db->order_by('n_id', 'DESC')->limit(4)->get('news')->result_array();
  }

  public function get_single_news($id)
  {
    return $this->db->where('s_id', $id)->get('skilled_info')->row_array();
  }
 
  public function get_all_skilled()
  {
    return  $this->db->order_by('s_id', 'DESC',)->limit(2)->get('skilled_info', 1, 0)->result_array();
  }
  public function get_all_skilled2()
  {
    return  $this->db->order_by('s_id', 'DESC',)->limit(1)->get('skilled_info', 1, 1)->result_array();
  }
  public function get_all_skilled3()
  {
    return  $this->db->order_by('s_id', 'DESC',)->limit(1)->get('skilled_info', 1, 2)->result_array();
  }
  public function get_all_skilled4()
  {
    return  $this->db->order_by('s_id', 'DESC',)->limit(1)->get('skilled_info', 1, 3)->result_array();
  }

  public function get_all_about()
  {
    return  $this->db->order_by('b_id', 'DESC',)->limit(1)->get('about_info')->result_array();
  }
  public function get_all_popular()
  {
    return  $this->db->order_by('p_id', 'DESC',)->limit(3)->get('popular_courses')->result_array();
  }

  public function get_category(){
    return $this->db->order_by('c_id','DESC')->get('categories')->result_array();
  }
}
