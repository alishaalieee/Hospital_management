<?php
    //include "./config.php";
    if(isset($_GET['name'])&&isset($_GET['address'])&&isset($_GET['phone'])&&isset($_GET['email'])&&isset($_GET['pswd'])&&isset($_GET['dob']))
    {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $address = $_GET['address'];
        $phone = $_GET['phone'];
        
        $pswrd = $_GET['pswd'];
        $dob= $_GET['dob'];
        $phone= $_GET['phone'];
        if ($_GET['gen1'] != null)
        {
              $gender = $_GET['gen1'];
        }
        else
        {
            $gender = $_GET['gen2'];
        }
        $e_password1 = password_hash($password,PASSWORD_BCRYPT);
      
       
    }

    echo $name.$email.$pswd.$phone.$gender;
    
?>
