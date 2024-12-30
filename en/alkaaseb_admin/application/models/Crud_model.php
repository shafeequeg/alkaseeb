<?php

class Crud_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function is_logged_in()
    {
        // Return true or false based on the presence of user data
        if ($this->session->userdata('user_id') == ""){

            $flash_data['flashdata_msg'] = 'Sorry. Your Session Timed Out or You Have No Access to this Area';
            $flash_data['flashdata_type'] = 'warning';
            $flash_data['alert_type'] = 'warning';
            $flash_data['flashdata_title'] = 'No Access !';
            $this->session->set_flashdata($flash_data);

            return false;
        }else{
            return true;
        }
    }
    public function select_category($data='', $order_by='', $limit='')
    {
        // Run the query

          $this->db->select('*')->from('category');

        if(!empty($data)){
            $this->db->where($data);
        }
        if(!empty($order_by)){
            $this->db->order_by('id',$order_by);

        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query;
    }
        public function insert_category($data='')
    {
        $qry=$this->db->insert('category',$data);
        
        return $qry;

    }
    public function update_category($data)
    {
        $this->db->where('cat_id',$data['cat_id']);
        $qry=$this->db->update('category',$data);
        return $qry;
    }
    

   
    ##products

    public function select_products($data='', $order_by='', $limit='')
    {
        // Run the query

          $this->db->select('*')->from('portfolio');
          $this->db->join('category','category.cat_id=portfolio.product_category');
       
        if(!empty($data)){
            $this->db->where($data);
        }
        if(!empty($order_by)){
            $this->db->order_by('product_id',$order_by);

        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query;
    }
        public function insert_products($data='')
    {
        $qry=$this->db->insert('portfolio',$data);
        
        return $qry;

    }
    public function update_products($data)
    {
        $this->db->where('product_id',$data['product_id']);
        $qry=$this->db->update('portfolio',$data);
        return $qry;
    }

    ##gallery

    

    //banner /slider 

    public function select_banner($data='', $order_by='', $limit='')
    {
        // Run the query

          $this->db->select('*')->from('slider');

        if(!empty($data)){
            $this->db->where($data);
        }
        if(!empty($order_by)){
            $this->db->order_by('id',$order_by);

        }
        if(!empty($limit)){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        return $query;
    }
        public function insert_banner($data='')
    {
        $qry=$this->db->insert('slider',$data);
        //print_r($this->db->last_query());
        //exit;
        return $qry;

    }
    public function update_banner($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->update('slider',$data);
        return $qry;
    }
    public function delete_banner($data)
    {
        $this->db->where('id',$data['id']);
        $qry=$this->db->delete('slider',$data);
       
        return $qry;
    }  


    


}