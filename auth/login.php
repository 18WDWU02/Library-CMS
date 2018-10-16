<?php
    require '../templates/header.php';
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
