<?php 


include 'conn.php';
session_start();
ob_start();
if(isset($_POST['login_admin'])){

    $client_email = mysqli_real_escape_string($conn,$_POST['client_email']);
    $client_pass = mysqli_real_escape_string($conn,$_POST['client_pass']);
    $get_client = mysqli_query($conn,"SELECT * FROM admin WHERE email = '$client_email'");
    while($client = mysqli_fetch_array($get_client)){
        $db_pass = $client['password'];
        if(password_verify($client_pass, $db_pass)){
            $_SESSION['email'] = $client_email;
            ?>
                <script>
                    alert("Login Sucess");
                    location.href='admin/admin_home.php';
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Wrong Email or Password");
                    location.href='index.php';
                </script>
            <?php
        }
    }
}

//client login 
if(isset($_POST['login_client'])){

    $client_email = mysqli_real_escape_string($conn,$_POST['client_email1']);
    $client_pass = mysqli_real_escape_string($conn,$_POST['client_pass1']);
    $get_client = mysqli_query($conn,"SELECT * FROM client WHERE email = '$client_email'");
    while($client = mysqli_fetch_array($get_client)){
        $db_pass = $client['password'];
        if(password_verify($client_pass, $db_pass)){
            $_SESSION['email'] = $client_email;
            ?>
                <script>
                    alert("Login Sucess");
                    location.href='client/client_home.php';
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Wrong Email or Password");
                    location.href='index.php';
                </script>
            <?php
        }
    }
}




//for registration 
if(isset($_POST['register'])){
    $lastname   = mysqli_real_escape_string($conn,$_POST['lastname']);
    $firstname  = mysqli_real_escape_string($conn,$_POST['firstname']);
    $address    = mysqli_real_escape_string($conn,$_POST['address']);
    $height     = mysqli_real_escape_string($conn,$_POST['height']);
    $email      = mysqli_real_escape_string($conn,$_POST['email']); 
    $password   = mysqli_real_escape_string($conn,$_POST['password']);
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);
    $level_of_activity  = mysqli_real_escape_string($conn, $_POST['level']);




    //formula for conversion 


    $dbw = $height - 100;
    $get_percent = $dbw * 0.10; //to get the percentage
    $final = $dbw - $get_percent; //final outcome 

    $cal = $final * $level_of_activity;




    //query to check if the email exist 
    $check = mysqli_query($conn,"SELECT * FROM client WHERE email  = '$email'");
    if($check->num_rows >=1 ){
        ?>
            <script>
                alert("This email is already used");
                location.href='index.php';
            </script>
        <?php
    }else{
        $register = mysqli_query($conn,"INSERT INTO client VALUES('','$lastname','$firstname','$address','$height','$email','$hash_pass','$cal')");
        if($register){
            $get_last = mysqli_query($conn,"SELECT client_id FROM client");
            while($last_row = mysqli_fetch_array($get_last)){
                $last_cli_id = $last_row['client_id'];
            }
            mysqli_query($conn,"INSERT INTO meal_plan VALUES('','$last_cli_id','','','','$cal')")
            ?>
                <script>
                    alert("Account Created Successfully!");
                    location.href='index.php';
                </script>
            <?php
        }else{
        //   ?>
        //     <script>
        //         alert("Error Creating Account");
        //         location.href='index.php';
        //     </script>
        //   <?php
        }
    }

}
?>