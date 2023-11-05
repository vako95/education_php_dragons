<?php

class AdminModel extends CI_model
{
    public function insert_news($data)
    {
        $this->db->insert('news', $data);
    }

    public function get_all_news()
    {
        return $this->db->order_by('n_id', 'DESc')->get('news')->result_array();
    }
    public function delete_news($id)
    {
        $this->db->where('n_id', $id)->delete('news');
    }
    public function get_single_news($id)
    {
        return $this->db->where('n_id', $id)->get('news')->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('n_id', $id)->update('news', $data);
    }

    public function check_user($data)
    {
        return $this->db->where($data)->get('admin')->row_array();
    }
    public function get_all_user_reguest(){
        return $this->db->order_by('u_id', 'DESc')->get('user_message')->result_array();
    }
    public function delete_message($id)
    {
        $this->db->where('u_id', $id)->delete('user_message');
    }

  
    public function get_skilled_news()
    {
        return $this->db->order_by('s_id', 'DESc')->get('skilled_info')->result_array();
    }
    public function insert_skilled($data)
    {
        $this->db->insert('skilled_info', $data);
    }
    public function delete_skilled($id)
    {
        $this->db->where('s_id', $id)->delete('skilled_info');
    }
    public function get_single_skilled($id)
    {
        return $this->db->where('s_id', $id)->get('skilled_info')->row_array();
    }
    public function update_skilled($id, $data)
    {
        $this->db->where('s_id', $id)->update('skilled_info', $data);
    }

    public function get_about_news()
    {
        return $this->db->order_by('b_id', 'DESc')->get('about_info')->result_array();
    }
    public function insert_about($data)
    {
        $this->db->insert('about_info', $data);
    }
    public function delete_about($id)
    {
        $this->db->where('b_id', $id)->delete('about_info');
    }
    public function get_single_about($id)
    {
        return $this->db->where('b_id', $id)->get('about_info')->row_array();
    }
    public function update_about($id, $data)
    {
        $this->db->where('b_id', $id)->update('about_info', $data);
    }


    public function get_popular_news()
    {
        return $this->db->order_by('p_id', 'DESc')->get('popular_courses')->result_array();
    }
    public function insert_popular($data)
    {
        $this->db->insert('popular_courses', $data);
    }
    public function delete_popular($id)
    {
        $this->db->where('p_id', $id)->delete('popular_courses');
    }
    public function get_single_popular($id)
    {
        return $this->db->where('p_id', $id)->get('popular_courses')->row_array();
    }
    public function update_popular($id, $data)
    {
        $this->db->where('p_id', $id)->update('popular_courses', $data);
    }

}
