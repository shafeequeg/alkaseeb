<?php
class Home extends CI_Controller{
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
        $this->page_data['directory'] = "home";
    }
    public function index()
    {
       
        $this->home();
    }
    public function home()
    {
       
        $this->page_data['page_name'] = 'banner';
        $this->load->view('Index',$this->page_data);
    }
    ##Article
    public function select_banner()
    {  
        
       //echo "hi"; 
       // print_r( $this->Article->select_article($data));
        $json_data=array();
        $j=0;

        
        $result	= $this->Crud->select_banner();
        
        $result_array=$result->result();
        //print_r($result_array);

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
    
            $img='<img style="width:50px;height: 50px;" src="'.base_url().'uploads/banner/'. $row->image.'">';
            
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="article_edit_btn" href="#article_edit_modal" data-toggle="modal" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="article_delete_btn" href="#article_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
            

            $array[$j][]=$row->id;
            $array[$j][]=$row->image;  
            $array[$j][]=$img;
            $array[$j][]=$row->title;
            $array[$j][]=$row->subtitle;
            $array[$j][]=$row->ar_title;
            $array[$j][]=$row->ar_subtitle;
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }
    public function banner_create()
    {

      
        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/banner/";
            $target_path1 = "uploads/banner/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['image'] = $filename;
        }else{
            $data['image'] = 'noimage.png';
        }
          $data['title'] = $this->security->xss_clean($this->input->post('title'));
          $data['subtitle'] = $this->security->xss_clean($this->input->post('subtitle'));
          $data['ar_title'] = $this->security->xss_clean($this->input->post('artitle'));
          $data['ar_subtitle'] = $this->security->xss_clean($this->input->post('arsubtitle'));
         
        $result=$this->Crud->insert_banner($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'home', 'refresh');
    }
    public function banner_update()
    {

        $data['id'] = $this->security->xss_clean($this->input->post('id'));

        
        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/banner/";
            $target_path1 = "uploads/banner/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['image'] = $filename;
        }
        $data['title'] = $this->security->xss_clean($this->input->post('title'));
        $data['subtitle'] = $this->security->xss_clean($this->input->post('subtitle'));
        $data['ar_title'] = $this->security->xss_clean($this->input->post('artitle'));
        $data['ar_subtitle'] = $this->security->xss_clean($this->input->post('arsubtitle'));
       
        $result=$this->Crud->update_banner($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'home', 'refresh');
    }
    public function banner_delete()
    {
        $data['id'] = $this->security->xss_clean($this->input->post('deleteid'));
      
        
        // $data['category'] = $this->security->xss_clean($this->input->post('deleteid'));
      //  $data['delete_status']=1;
        $result=$this->Crud->delete_banner($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'home', 'refresh');
    }

    // home about section 

    

}