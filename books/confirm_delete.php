<?php
    require '../templates/header.php';

    if($_POST){
    } else {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `books` WHERE id = $id";
        $result = mysqli_query($dbc, $sql);
        if($result && mysqli_affected_rows($dbc) > 0){
            $book = mysqli_fetch_array($result, MYSQLI_ASSOC);
        } else if(mysqli_affected_rows($dbc) == 0){
            header('Location: ../errors/404.php');
        } else {
            die("ERROR, cannot get the data requested");
        }
    }
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Are you sure you want to delete, <?= $book['book_name'];  ?></h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-secondary" href="./books/book.php">Cancel</a>
             <form class="form-inline" action="./books/delete.php" method="post">
                 <input type="hidden" name="bookID" value="<?= $book['id']; ?>">
                 <button type="submit" class="btn btn-danger" name="button">Delete</button>
             </form>
         </div>
     </div>



 </div>


<?php require '../templates/footer.php' ?>
