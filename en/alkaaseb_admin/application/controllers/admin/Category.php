<?php
class Category extends CI_Controller{
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
        $this->load->model('Crud_model','Crud');
        $this->load->model('User_model','User');
       
        if($this->User->is_logged_in('admin')==false){
            redirect(base_url(), 'refresh');
        }
        $this->page_data['user_role'] = $this->session->userdata('type');
        $this->page_data['user_directory'] = $this->session->userdata('type')."/";
        $this->page_data['directory'] = "category";
    }
    public function index()
    {
       
        $this->home();
    }
    public function home()
    {
       
        $this->page_data['page_name'] = 'manage';
        $this->load->view('Index',$this->page_data);
    }
    ##Article
    public function select()
    {  
        
       //echo "hi"; 
       // print_r( $this->Article->select_article($data));
        $json_data=array();
        $j=0;

        $data['delete_status']=0;
        $result	= $this->Crud->select_category($data    );
        
        $result_array=$result->result();
        //print_r($result_array);

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
    
           
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="article_edit_btn" href="#article_edit_modal" data-toggle="modal" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="article_delete_btn" href="#article_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
            

            $array[$j][]=$row->cat_id;
          
            $array[$j][]=$row->cat_name;
            $array[$j][]=$row->ar;
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function create()
    {

      
        
        $data['cat_name'] = $this->security->xss_clean($this->input->post('title'));
        $data['ar'] = $this->security->xss_clean($this->input->post('ar'));
          
        $result=$this->Crud->insert_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = ' Created Successfully!';
            $flash_data['flashdata_type'] = 'info';
            $flash_data['alert_type'] = 'info';
            $flash_data['flashdata_title'] = 'Success !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
    public function update()
    {

        $data['cat_id'] = $this->security->xss_clean($this->input->post('id'));

        
        $data['ar'] = $this->security->xss_clean($this->input->post('ar'));
        
        $data['cat_name'] = $this->security->xss_clean($this->input->post('title'));
      
        $result=$this->Crud->update_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = ' Updated Successfully!';
            $flash_data['flashdata_type'] = 'info';
            $flash_data['alert_type'] = 'info';
            $flash_data['flashdata_title'] = 'Success !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
    public function delete()
    {
        $data['cat_id'] = $this->security->xss_clean($this->input->post('deleteid'));
      
        
        // $data['category'] = $this->security->xss_clean($this->input->post('deleteid'));
       $data['delete_status']=1;
        $result=$this->Crud->update_category($data);
        if($result==1)
        {
            $flash_data['flashdata_msg'] = ' Deleted Successfully!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !';
        } else {
            $flash_data['flashdata_msg'] = 'Sorry.. There Have been Some Error Occurred. Please Try Again!';
            $flash_data['flashdata_type'] = 'error';
            $flash_data['alert_type'] = 'danger';
            $flash_data['flashdata_title'] = 'Error !!';
        }
        $this->session->set_flashdata($flash_data);
        redirect(base_url() . $this->page_data['user_directory'].'category', 'refresh');
    }
}