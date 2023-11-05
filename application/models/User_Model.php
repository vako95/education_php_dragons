<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
  public function save_post_record()
  {
    $fname = (string) $this->input->post('fname');
    $mname = (string) $this->input->post('mname');
    $lname = (string) $this->input->post('lname');
    $xname = (string) $this->input->post('xname');
    $username = (string)  $this->input->post('username');
    $password = (string) $this->input->post('password');
    $password = md5($password);

    $data = array(
      'fname' => $fname,
      'mname' =>  $mname,
      'lname' => $lname,
      'xname' =>  $xname,
      'username' => $username,
      'password' => $password,
      'role' => USER_ROLE_VISITOR
    );
    $response =  $this->db->insert('users', $data);

    if ($response) {
      return $this->db->insert_id();
    } else {

      return False;
    }
  }


  public function get_profile_information($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('users');
    $row = $query->row();

    if ($row) {
      $row->personal_information = $this->get_personal_information($id);
      $row->programming_skills   = $this->get_programming_skills($id);
    }
    return $row;
  }

  public function get_personal_information($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('personal_information');
    $row = $query->row();

    if (empty($row)) {
      $row = array(
        'dob'     => '',
        'pob'     => '',
        'gender'  => '',
        'cstatus' => '',
        'email' => '',
        'contact_no' => '',
        'photo'    => '',
      );
    }
    return (object) $row;
  }

  public function get_programming_skills($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('programming_skills');
    $row = $query->row();

    if (empty($row)) {
      $row = array(
        'prog_languages'      => '',
        'backend_frameworks'  => '',
        'frontend_frameworks' => '',
      );
    }
    return (object) $row;
  }

  public function update_post_record()
  {
    $user_id = (int) $this->input->post('user_id');

    $fname = (string) $this->input->post('fname');
    $mname = (string) $this->input->post('mname');
    $lname = (string) $this->input->post('lname');
    $xname = (string) $this->input->post('xname');

    $data = array(
      'fname' => $fname,
      'mname' =>  $mname,
      'lname' => $lname,
      'xname' =>  $xname,
    );
    $this->db->where('user_id', $user_id);
    $response =  $this->db->update('users', $data);

    if ($response) {
      $this->update_post_personal_information();
      return $user_id;
    } else {

      return False;
    }
  }

  public function update_post_personal_information()
  {
    $user_id = (int) $this->input->post('user_id');

    $dob = (string) $this->input->post('dob');
    $pob = (string) $this->input->post('pob');
    $gender = (string) $this->input->post('gender');
    $cstatus = (string) $this->input->post('cstatus');
    $email = (string) $this->input->post('email');
    $contact_no = (string) $this->input->post('contact_no');

    $data = array(
      'user_id' => $user_id,
      'dob' => $dob,
      'pob' =>  $pob,
      'gender' => $gender,
      'cstatus' =>  $cstatus,
      'email' =>  $email,
      'contact_no' =>  $contact_no,
    );

    if ($this->is_personal_information_exist($user_id)) {
      $this->db->where('user_id', $user_id);
      $response = $this->db->update('personal_information', $data);

      if ($response) {
        return $user_id;
      } else {
        return FALSE;
      }
    } else {
      $response = $this->db->insert('personal_information', $data);

      if ($response) {
        return $this->db->insert_id();
      } else {
        return False;
      }
    }
  }

  public function is_personal_information_exist($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('personal_information');
    $row = $query->row();

    if ($row) {
      return TRUE;
    }
    return FALSE;
  }

  public function update_post_programming_skills()
  {
    $user_id = (int) $this->input->post('user_id');

    $prog_languages = (string) $this->input->post('prog_languages');
    $backend_frameworks = (string) $this->input->post('backend_frameworks');
    $frontend_frameworks = (string) $this->input->post('frontend_frameworks');

    $data = array(
      'user_id' => $user_id,
      'prog_languages' => $prog_languages,
      'backend_frameworks' => $backend_frameworks,
      'frontend_frameworks' =>  $frontend_frameworks,
    );

    if ($this->is_programming_skills_exist($user_id)) {
      $this->db->where('user_id', $user_id);
      $response = $this->db->update('programming_skills', $data);

      if ($response) {
        return $user_id;
      } else {
        return FALSE;
      }
    } else {
      $response = $this->db->insert('programming_skills', $data);

      if ($response) {
        return $this->db->insert_id();
      } else {
        return FALSE;
      }
    }
  }


  public function is_programming_skills_exist($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('programming_skills');
    $row = $query->row();

    if ($row) {
      return TRUE;
    }
    return FALSE;
  }

  public function update_post_profile_picture($file_name)
  {
    $user_id = (int) $this->input->post('user_id');
    $this->delete_actual_profile_picture($user_id);
    $data = array(
      'user_id' => $user_id,
      'photo' =>  $file_name,
    );

    if ($this->is_personal_information_exist($user_id)) {
      $this->db->where('user_id', $user_id);
      $response = $this->db->update('personal_information', $data);

      if ($response) {
        return $user_id;
      } else {
        return FALSE;
      }
    } else {
      $response = $this->db->insert('personal_information', $data);
      if ($response) {
        return $this->db->insert_id();
      } else {
        return FAlSE;
      }
    }
  }

  public function delete_actual_profile_picture($id)
  {
    $data = $this->get_personal_information($id);
    if (isset($data->photo) && !empty($data->photo)) {
      $file_name  = './uploads/news/' . $data->photo;

      if (file_exists($file_name)) {
        return unlink($file_name);
      }
    }
    return TRUE;
  }

  public function save_post_record_admin()
  {
    $fname = (string) $this->input->post('fname');
    $mname = (string) $this->input->post('mname');
    $lname = (string) $this->input->post('lname');
    $xname = (string) $this->input->post('xname');
    $username = (string)  $this->input->post('username');
    $password = (string) $this->input->post('password');
    $password = md5($password);
    $role = (string) $this->input->post('role');


    $data = array(
      'fname' => $fname,
      'mname' =>  $mname,
      'lname' => $lname,
      'xname' =>  $xname,
      'username' => $username,
      'password' => $password,
      'role' => $role
    );
    $response =  $this->db->insert('users', $data);

    if ($response) {
      return $this->db->insert_id();
    } else {

      return False;
    }
  }

  public function get_all_active_users()
  {
    $this->db->where('status', 'active');

    $this->db->group_start();
    $this->db->where('role', USER_ROLE_ADMIN);
    $this->db->or_where('role', USER_ROLE_MANAGER);
    $this->db->group_end();
    $query = $this->db->get('users');
    $result = $query->result();

    return $result;
  }

  public function get_all_deactivated_users()
  {
    $this->db->where('status', 'deactivated');

    $this->db->group_start();
    $this->db->where('role', USER_ROLE_ADMIN);
    $this->db->or_where('role', USER_ROLE_MANAGER);
    $this->db->group_end();
    $query = $this->db->get('users');
    $result = $query->result();

    return $result;
  }

  public function get_all_active_visitors()
  {
    $this->db->where('status', 'active');
    $this->db->where('role', USER_ROLE_VISITOR);
    
 
    $query = $this->db->get('users');
    $result = $query->result();

    return $result;
  }

  

  public function get_all_deactivated_visitors()
  {
    $this->db->where('status', 'deactivated');

    $this->db->where('role', USER_ROLE_VISITOR);
    $query = $this->db->get('users');
    $result = $query->result();

    return $result;
  }

  public function get_user($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('users');
    $row = $query->row();


    return $row;
  }

  public function update_post_record_admin()
  {
    $user_id = (int) $this->input->post('user_id');
    $fname = (string) $this->input->post('fname');
    $mname = (string) $this->input->post('mname');
    $lname = (string) $this->input->post('lname');
    $xname = (string) $this->input->post('xname');
    $username = (string)  $this->input->post('username');
    $role = (string) $this->input->post('role');


    $data = array(
      'fname' => $fname,
      'mname' =>  $mname,
      'lname' => $lname,
      'xname' =>  $xname,
      'username' => $username,

      'role' => $role
    );
    $this->db->where('user_id', $user_id);
    $response =  $this->db->update('users', $data);

    if ($response) {
      return $user_id;
    } else {

      return False;
    }
  }

  public function deactivate_user($id)
  {
    $data = array(
      'status' => 'deactivated'
    );
    $this->db->where('user_id', $id);
    $response =  $this->db->update('users', $data);

    if ($response) {
      return $id;
    } else {

      return False;
    }
  }

  public function reactivate_user($id)
  {
    $data = array(
      'status' => 'active'
    );
    $this->db->where('user_id', $id);
    $response =  $this->db->update('users', $data);

    if ($response) {
      return $id;
    } else {

      return FALSE;
    }
  }

  public function is_user_exist($id)
  {
    $this->db->where('user_id', $id);
    $query = $this->db->get('users');
    $row = $query->row();
    if ($row) 
    {
      return TRUE;
    }
    return FALSE;
  }
  public function is_user_still_active($id)
  {
    $this->db->where('user_id', $id);
    $this->db->where('status', 'active');
    $query = $this->db->get('users');
    $row = $query->row();
if($row){
  return TRUE;
}
return FALSE;

  }
}
