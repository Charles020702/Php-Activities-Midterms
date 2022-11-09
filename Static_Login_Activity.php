<?php 
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/StaticLogin.css">
    <title>Static Login</title>
</head>
<body>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                            <label for="drpPosition" class="text-info" >Position:</label><br>
                                <select name="drpPosition" id="" class="form-select" >
                                <option value="Admin">Admin</option>
                                <option value="Content Manager">Content Manager</option>
                                <option value="System User">System User</option></select>
                            </div>  
                            <div class="form-group">
                                <label for="txtusername" class="text-info" >Username:</label><br>
                                <input type="text" name="txtusername" id="txtusername" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="txtpassword" class="text-info" >Password:</label><br>
                                <input type="password" name="txtpassword" id="txtpassword" class="form-control" >
                            </div>
                            <div class="form-group d-grid gap-2">
                                <br>
                                <button class="btn btn-outline-info mb-5 " name="btnSignin" type="submit">Sign in </button>
                                
                            </div>
                            <br>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST['btnSignin'])):
       
           $Position = $_POST['drpPosition'];
            $Username = $_POST['txtusername'];
            $Password = $_POST['txtpassword'];
                

              
                if(($Position == "Admin") && ($Username == "admin") && ($Password == "pass1234")){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                Welcome to the System: admin
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';    
                }
                elseif(($Position == "Admin") && ($Username == "renmark") && ($Password == "pogi1234")){
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Welcome to the System: renmark
                    <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';     
                }
                elseif(($Position == "Content Manager") && ($Username == "pepito") && ($Password == "manaloto")){
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Welcome to the System: pepito
                    <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';     
                }
                elseif(($Position == "Content Manager") && ($Username == "juan") && ($Password == "delacruz")){
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Welcome to the System: juan
                    <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';     
                }
                elseif(($Position == "System User") && ($Username1 == "pedro") && ($Password == "penduko")){
                    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Welcome to the System: pedro
                    <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';     
                }
                else{
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Invalid Position/Username/Password.
                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                }
               
                
    ?>
    <?php endif ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>