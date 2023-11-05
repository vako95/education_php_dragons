<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisitorPortal extends CI_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AccountModel');
        $is_logged_in =  $this->AccountModel->is_user_logged_in();

        if ($is_logged_in) {
            if ($_SESSION['role'] != USER_ROLE_VISITOR) {
                redirect('admin_cover_index');
            }
            
        } else {
            redirect('admin_cover_index');
        }
        $this->load->model('User_Model');
        $id = $_SESSION['user_id'];
       
        if(!$this->User_Model->is_user_still_active($id))
        {
            redirect('admin_logout');
        }
        $this->data['profile'] = $this->User_Model->get_profile_information($id);
    }




    public function index()
    {
        $this->personal_information();
        // $this->load->view('admin/login_page/visitor_portal/index');

    }
    public function personal_information()
    {
        $this->load->model('User_Model');

        $id = $_SESSION['user_id'];
        $this->data['profile'] = $this->User_Model->get_profile_information($id);


        $this->load->view('admin/login_page/visitor_portal/personal_information',  $this->data);
    }


    public function personal_information_edit()
    {
        $this->_personal_information_edit_submit();
        $this->load->model('User_Model');

        $id = $_SESSION['user_id'];

        $this->data['profile']  = $this->User_Model->get_profile_information($id);

        $this->load->view('admin/login_page/visitor_portal/personal_information_edit', $this->data);
    }

    public function _personal_information_edit_submit()
    {
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('fname', 'First Name',  'trim|required');
            $this->form_validation->set_rules('mname', 'Middle Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name',   'trim|required');
            $this->form_validation->set_rules('xname', 'Suffix Name', 'trim|required');
            $this->form_validation->set_rules('dob',   'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('pob', 'Place of Birth',   'trim|required');
            $this->form_validation->set_rules('gender', 'Gender',   'trim|required');
            $this->form_validation->set_rules('cstatus', 'Civil Status',   'trim|required');
            $this->form_validation->set_rules('contact_no', 'Contact No.',   'trim|required');

            if ($this->form_validation->run() != FALSE) {

                $this->load->model('User_Model');
                $response =  $this->User_Model->update_post_record();
                if ($response) {
                    $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla elave edildi.');
                    redirect('admin_personal_information');
                } else {
                    $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
                    redirect('admin_personal_edit');
                }
            } else {
                $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
            }
        }
    }


    public function programming_skills()
    {
        $this->load->model('User_Model');

        $id = $_SESSION['user_id'];
        $this->data['skills'] = $this->User_Model->get_programming_skills($id);

        $this->load->view('admin/login_page/visitor_portal/programming_skills',  $this->data);
    }

    public function programming_skills_edit()
    {
        $this->_programming_skills_edit_submit();
        $this->load->model('User_Model');

        $id = $_SESSION['user_id'];
        $this->data['skills'] = $this->User_Model->get_programming_skills($id);

        $this->load->view('admin/login_page/visitor_portal/programming_skills_edit',  $this->data);
    }

    public function _programming_skills_edit_submit()
    {
        if ($this->input->post('submit')) {

            $this->form_validation->set_rules('prog_languages', 'Programing Languages', 'trim|required');
            $this->form_validation->set_rules('backend_frameworks', 'Backend Frameworks', 'trim|required');
            $this->form_validation->set_rules('frontend_frameworks', 'Frontend Frameworks', 'trim|required');

            if ($this->form_validation->run() != FALSE) {

                $this->load->model('User_Model');
                $response =  $this->User_Model->update_post_programming_skills();
                if ($response) {
                    $this->session->set_flashdata('success', 'Təbriklər! Məlumat uğurla elave edildi.');
                    redirect('admin_programming_skills');
                } else {
                    $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
                    redirect('admin_programming_skills_edit');
                }
            } else {
                $this->session->set_flashdata('error', 'Boşluq buraxmayin!');
            }
        }
    }

    public function profile_picture_edit()
    {
        $this->_profile_picture_edit_submit();
        $this->load->model('User_Model');

        $id = $_SESSION['user_id'];
        $this->data['profile']  = $this->User_Model->get_profile_information($id);

        $this->load->view('admin/login_page/visitor_portal/profile_picture_edit', $this->data);
    }

    public function _profile_picture_edit_submit()
    {
        if ($this->input->post('submit')) {

            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'jpg|png';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('profile_picture')) {
                $this->session->set_flashdata('error', 'You did not select a file to upload.');
            } else {
                $file_name = $this->upload->data('file_name');
                $this->load->model('User_Model');
                $response =  $this->User_Model->update_post_profile_picture($file_name);
                if ($response) {
                    $this->session->set_flashdata('success', 'Your profile picture was successfully saved.');
                } else {
                    $this->session->set_flashdata('error', 'Sorry! An error occour  your profile picture was nnot saved.');
                }
            }
            redirect('admin_profile_picture_edit');
        }
    }
}
