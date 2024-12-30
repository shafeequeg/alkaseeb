<?php
class Portfolio extends CI_Controller{
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
        $this->page_data['directory'] = "product";
    }
    public function index()
    {
       
        $this->home();
    }
    public function home()
    {
         $data['category.delete_status']=0;
        $this->page_data['category']=$this->Crud->select_category($data)->result();
       
        $this->page_data['page_name'] = 'products';
        $this->load->view('Index',$this->page_data);
    }

    public function edit($id='')
    {
        if(!empty($id)){
            $data1['category.delete_status']=0;
            $data['product_id']=$id;
            $this->page_data['products']=$this->Crud->select_products($data)->row();
            $this->page_data['category'] = $this->Crud->select_category($data1)->result();
            $this->page_data['page_name'] = 'edit_product';
            $this->load->view('Index',$this->page_data);
        }
        
    }
   
    public function select()
    {   
      
        $json_data=array();
        $j=0;

        $data['portfolio.delete_status']=0;
        $data['category.delete_status']=0;
       
        $result	= $this->Crud->select_products($data);
       
        $result_array=$result->result();

        $json_data['draw']=5;
        $json_data['recordsTotal']=$result->num_rows();
        $json_data['recordsFiltered']=$result->num_rows();
        $array=array();
       
        foreach($result_array as $row):
            $id = $row->product_id;
            $img='<img style="width:50px;height: 50px;" src="'.base_url().'uploads/products/'. $row->photo.'">';
            
            $btn_edit='<a style="margin-left: 5px;margin-right: 5px" id="article_edit_btn" href="'.base_url().$this->page_data['user_directory'].'portfolio/edit/'.$row->product_id.'" class="btn btn-warning m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-edit"></i>
                        </a>';
            $btn_delete='<a style="margin-left: 5px;margin-right: 5px" id="article_delete_btn" href="#article_delete_modal" data-toggle="modal" class="btn btn-danger m-btn m-btn--icon  m-btn--icon-only  m-btn--pill m-btn--air">
                            <i class="la la-trash"></i>
                        </a>';
           

            $array[$j][]=$row->product_id;
            $array[$j][]=$row->title;
            $array[$j][]=$row->product_category;
            $array[$j][]=$row->cat_name;
           
            $array[$j][]=$row->photo;
            $array[$j][]=$img;
            $array[$j][]=$row->ar_title;
            $array[$j][]=$row->ar_category;
            $array[$j][]=$row->ar;

            $array[$j][]=$row->ar_description;
            $array[$j][]=$row->en_description;
            $array[$j][]=$btn_edit.$btn_delete;
            $j++;
        endforeach;

        $json_data['data']=$array;
        echo json_encode($json_data);  // send data as json format
    }

    public function create()
    {

      
        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/products/";
            $target_path1 = "uploads/products/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['photo'] = $filename;
        }else{
            $data['photo'] = 'noimage.png';
        }

       
        $data['product_category'] = $this->security->xss_clean($this->input->post('category'));
        $data['title'] = $this->security->xss_clean($this->input->post('title'));
        $data['ar_category'] = $this->security->xss_clean($this->input->post('ar_category'));
        $data['ar_title'] = $this->security->xss_clean($this->input->post('ar_title'));
        $data['ar_description'] = $this->security->xss_clean($this->input->post('ar_desc'));
        $data['en_description'] = $this->security->xss_clean($this->input->post('en_desc'));
        $result=$this->Crud->insert_products($data);
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
       // redirect(base_url() . $this->page_data['user_directory'].'portfolio', 'refresh');
    }
    public function update()
    {

        $data['product_id'] = $this->security->xss_clean($this->input->post('id'));
        $data['product_category'] = $this->security->xss_clean($this->input->post('category'));
        $data['title'] = $this->security->xss_clean($this->input->post('title'));
         
        $data['ar_category'] = $this->security->xss_clean($this->input->post('ar_category'));
        $data['ar_title'] = $this->security->xss_clean($this->input->post('ar_title'));
        $data['ar_description'] = $this->security->xss_clean($this->input->post('ar_desc'));
        $data['en_description'] = $this->security->xss_clean($this->input->post('en_desc'));
        if ($_FILES['uploaded_file']["size"] > 0) {
            $target_path = "uploads/products/";
            $target_path1 = "uploads/products/";
            $filename = basename($_FILES['uploaded_file']['name']);

            $target_path = $target_path . $filename;

            while (file_exists($target_path)) {

                $filename = rand(0, 1000) . $filename;
                $target_path = $target_path . $filename;
            }

            if (!move_uploaded_file($_FILES['uploaded_file']["tmp_name"], $target_path1 . $filename)) {

                $imageerror = "An Error Occurred While Trying to Upload Image";
            }
            $data['photo'] = $filename;
        }
       
         
        $result=$this->Crud->update_products($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'portfolio', 'refresh');
    }
    public function delete()
    {
        $data['product_id'] = $this->security->xss_clean($this->input->post('deleteid'));
        $data['delete_status']=1;
        $result=$this->Crud->update_products($data);
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
        redirect(base_url() . $this->page_data['user_directory'].'portfolio', 'refresh');
    }


    

    

}
