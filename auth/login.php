<?php
    require '../templates/header.php';

    if($_POST){
        extract($_POST);
        $errors = array();

        // validation

        if(empty($errors)){
            $sql = "SELECT * FROM `users` WHERE username = '$username'";
            $result = mysqli_query($dbc, $sql);
            if($result && mysqli_affected_rows($dbc) > 0){
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if(password_verify($password, $user['password'])){
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = $user['username'];
                    header("Location:../index.php");
                } else {
                    array_push($errors, "Incorrect username or password");
                }
            } else {
                array_push($errors, "Sorry there is no username matching that request");
            }

        }
    }
 ?>

 <div class="container py-5">
     <div class="row">
         <div class="col-md-6 mx-auto">
             <div class="card rounded-0">
                 <div class="card-header">
                     <h3 class="mb-0">Login</h3>
                 </div>
                 <div class="card-body">
                     <?php if($_POST && !empty($errors)): ?>
                         <div class="row">
                             <div class="col">
                                 <div class="alert alert-danger pb-0" role="alert">
                                     <ul>
                                         <?php foreach($errors as $singleError): ?>
                                             <li><?= $singleError; ?></li>
                                         <?php endforeach; ?>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     <?php endif; ?>
                     <form class="form" method="POST" action="./auth/login.php">
                         <div class="form-group">
                             <label for="username">Username</label>
                             <input type="text" class="form-control form-control-lg rounded-0" name="username">
                         </div>
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control form-control-lg rounded-0" name="password" autocomplete="new-password">
                         </div>

                         <button type="submit" class="btn btn-info btn-lg btn-block">Login</button>
                     </form>
                 </div>
                 <div class="card-footer">
                     <a href="./auth/register.php" class="btn btn-link text-muted">Register</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php require '../templates/footer.php' ?>
