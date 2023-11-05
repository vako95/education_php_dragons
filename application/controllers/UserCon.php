<?php
class UserCon extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->model('Site_Model');
       $this->lang->load('message','english');
    }
    public function index()
    {
        $data['get_all_news'] = $this->Site_Model->get_all_news();
        $data['get_category']   = $this->Site_Model->get_category();
        $data['all_about']    = $this->Site_Model->get_all_about();
        $data['all_popular']  = $this->Site_Model->get_all_popular();

        $data['all_skilled'] = $this->Site_Model->get_all_skilled();
        $data['all_skilled2'] = $this->Site_Model->get_all_skilled2();
        $data['all_skilled3'] = $this->Site_Model->get_all_skilled3();
        $data['all_skilled4'] = $this->Site_Model->get_all_skilled4();

        $this->load->view('user/index', $data);
    }
    public function about()
    {
        $data['get_all_news'] = $this->Site_Model->get_all_news();
        $data['all_about'] = $this->Site_Model->get_all_about();

        $this->load->view('user/about', $data);
    }
    public function contact()
    {
        $data['get_all_news'] = $this->Site_Model->get_all_news();
        $this->load->view('user/contact', $data);
    }
    public function courses()
    {

        $this->load->view('user/courses');
    }
    public function team()
    {

        $this->load->view('user/team');
    }
    public function testimonial()
    {

        $this->load->view('user/testimonial');
    }
    public function error_404()
    {

        $this->load->view('user/404');
    }
    public function contactAct()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
            $data = [
                'u_name'    =>   $name,
                'u_email'   =>   $email,
                'u_subject' =>   $subject,
                'u_message' =>   $message,
                'u_date'    => date("Y-m-d  H:i:s"),
            ];

            $this->Site_Model->insert($data);
            $this->session->set_flashdata('success', 'Melumat elave olundu.');
            redirect(base_url('contact'));
        } else {
            $this->session->set_flashdata('err', 'Bosluq buraxmayin');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function news_single($id)
    {
        $data['get_single_news'] = $this->Site_Model->get_single_news($id);



        $data['all_skilled'] = $this->Site_Model->get_all_skilled();
        $data['all_skilled2'] = $this->Site_Model->get_all_skilled2();
        $data['all_skilled3'] = $this->Site_Model->get_all_skilled3();

        $this->load->view('user/post-details', $data);
    }
}
