<?php
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->initial();
    }
    public function initial()
    {
        ini_set('max_execution_time', 5000);
        ini_set("memory_limit", "-1");
        date_default_timezone_set('Asia/Kolkata');
        
        $this->load->model('User_model','User');

        if($this->User->is_logged_in('admin')==false){
            redirect(base_url(), 'refresh');
        }
        $this->page_data['user_role'] = $this->session->userdata('type');
        $this->page_data['user_directory'] = $this->session->userdata('type')."/";
        $this->page_data['directory'] = "home";
    }
    public function index()
    {
       
        $this->home();
    }
    public function home()
    {
        $this->page_data['page_name'] = 'dashboard';
        $this->load->view('Index',$this->page_data);
    }
    ##Article
   
}
