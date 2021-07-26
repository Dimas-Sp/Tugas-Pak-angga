<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from tb_data");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


        // Method untuk mengambil semua data dari table
        function GetData_All_L (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"select * from tb_data where jns_kel ='L'");
            while($this->data=mysqli_fetch_array($this->query)){
                $this->result[]=$this->data;
            }
            return $this->result;
        }

        // Method untuk mengambil semua data dari table
        function GetData_All_M (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"select * from tb_data where status ='M'");
            while($this->data=mysqli_fetch_array($this->query)){
                $this->result[]=$this->data;
            }
            return $this->result;
       }        
     
       
        // Method untuk mengambil semua data dari table
        function GetData_All_B (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"select * from tb_data where status ='B'");
            while($this->data=mysqli_fetch_array($this->query)){
                $this->result[]=$this->data;
            }
            return $this->result;
       }


        // Method untuk mengambil semua data dari table
        function GetData_All_U20B30 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();

            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM tb_data");
            while($this->data=mysqli_fetch_array($this->query)){
                if(($this->data['age']>=20)&&($this->data['age']<=30)) {
                    $this->result[]=$this->data;
                }
                // $this->result[]=$this->data;
            }
            return $this->result;
    }
    

            // Method untuk mengambil semua data dari table
            function GetData_All_U31B45 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
    
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM tb_data");
                while($this->data=mysqli_fetch_array($this->query)){
                    if(($this->data['age']>=31)&&($this->data['age']<=45)) {
                        $this->result[]=$this->data;
                    }
                    // $this->result[]=$this->data;
                }
                return $this->result;
        }


        // Method untuk mengambil semua data dari table
        function GetData_All_M1B5 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();

            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM tb_data");
            while($this->data=mysqli_fetch_array($this->query)){
                if(($this->data['age']>=1)&&($this->data['age']<=5)) {
                    $this->result[]=$this->data;
                }
                // $this->result[]=$this->data;
            }
            return $this->result;
    }
    

    // Method untuk mengambil semua data dari table
    function GetData_All_M610 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM tb_data");
        while($this->data=mysqli_fetch_array($this->query)){
            if(($this->data['age']>=6)&&($this->data['age']<=10)) {
                $this->result[]=$this->data;
            }
            // $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil semua data dari table
    function GetData_All_M1125 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM tb_data");
        while($this->data=mysqli_fetch_array($this->query)){
            if(($this->data['age']>=11)&&($this->data['age']<=25)) {
                $this->result[]=$this->data;
            }
            // $this->result[]=$this->data;
        }
        return $this->result;
}
}


?>

