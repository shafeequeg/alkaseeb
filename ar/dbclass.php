<?php
class database
{
    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alkaaseb";

        // Create connection
        $this->sql = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        mysqli_set_charset($this->sql,"utf8");
        if ($this->sql->connect_error) {
            die("Connection failed: " . $this->sql->connect_error);
        }


    }

   


    public function select_slider($query)
    {


          $sql = "select * from slider".$query;
          $result = $this->sql->query($sql);
          return $result;
    }

  
    public function select_category($query)
    {


          $sql = "select * from category".$query;
          $result = $this->sql->query($sql);
          return $result;
    }

    public function select_service($query)
    {


          $sql = "select * from service".$query;
          $result = $this->sql->query($sql);
          return $result;
    }

    public function select_portfolio($query)
    {


          $sql = "select * from portfolio".$query;
          $result = $this->sql->query($sql);
          return $result;
    }
    public function select_product_gallery($query)
    {


          $sql = "select * from gallery".$query;
          $result = $this->sql->query($sql);
          return $result;
    }

    


   


                                                            
}
    