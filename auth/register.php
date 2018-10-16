<?php
    require '../templates/header.php';
 ?>

 <div class="container py-5">
     <div class="row">
         <div class="col-md-6 mx-auto">
             <div class="card rounded-0">
                 <div class="card-header">
                     <h3 class="mb-0">Register</h3>
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
                     <form class="form" method="POST" action="./auth/register.php">
                         <div class="form-group">
                             <label for="name">Name</label>
                             <input type="text" class="form-control form-control-lg rounded-0" name="name">
                         </div>
                         <div class="form-group">
                             <label for="username">Username</label>
                             <input type="text" class="form-control form-control-lg rounded-0" name="username">
                         </div>
                         <div class="form-group">
                             <label for="email">Email</label>
                             <input type="email" class="form-control form-control-lg rounded-0" name="email">
                         </div>
                         <div class="form-group">
                             <label for="password">Password</label>
                             <input type="password" class="form-control form-control-lg rounded-0" name="password" autocomplete="new-password">
                         </div>
                         <div class="form-group">
                             <label for="confirmPassword">Confirm Password</label>
                             <input type="password" class="form-control form-control-lg rounded-0" name="confirmPassword" autocomplete="new-password">
                         </div>

                         <button type="submit" class="btn btn-info btn-lg btn-block">Register</button>
                     </form>
                 </div>
                 <div class="card-footer">
                     <a href="./auth/login.php" class="btn btn-link text-muted">Already a member? Login in</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php require '../templates/footer.php' ?>
