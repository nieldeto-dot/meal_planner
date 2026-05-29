<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-6 rounded-4 d-flex justify-content-center align-items-center flex-column left_box">
                <div class="featured-image mb-3">
                    <img src="../image/logo1.png"  class="img-fluid" style="width:250px">
                 
                </div>
                
            </div>
            <div class="col-md-6 righ-box">
                <form action="../process.php" method="POST">
                    <div class="row align-items-center">
                    <div class="header_text mb-4">
                        <p class="fw-bold">PNDP ADMIN</p>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><i class="bi bi-person"></i></div>
                        <input type="email" name="email" required placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-text"><i class="bi bi-key"></i></div>
                        <input type="password" name="password" id="pass" required placeholder="Enter Password" id="" class="form-control">
                    </div>
                    <div class="input-group">
                            <input type="submit" name="admin_login" value="Login" class="btn w-100 btn-primary">
                    </div>
                    <div class="input-group">
                        <div class="form-check">
                            <input type="checkbox" onclick="showpass()" id="formCheck" class="form-check-input">
                            <label for="formCheck"><small>Showpassword</small></label>
                        </div>
                    </div>
                    <script>
                        function showpass(){
                            var x = document.getElementById("pass");
                            if(x.type ==="password"){
                                x.type = "text";
                            }else{
                                x.type = "password"
                            }
                        }
                    </script>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>