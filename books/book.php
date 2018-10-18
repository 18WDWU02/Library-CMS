<?php
    require '../templates/header.php';

    $id = $_GET['id'];
    // $sql = "SELECT * FROM `books` WHERE id = $id";
    //Getting data from two different tables, joining them together into one query.
    $sql = "SELECT books.id as bookID, book_name, description, image_name";
    $sql .= ", authors.id as authorID, author_name as author ";
    $sql .= "FROM books ";
    $sql .= "INNER JOIN authors ON books.author_id = authors.id ";
    $sql .= "WHERE books.id = $id";

    $result = mysqli_query($dbc, $sql);

    if($result && mysqli_affected_rows($dbc) > 0){
        $singleBook = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else if($result && mysqli_affected_rows($dbc) == 0){
        // die("ERROR 404");
        header("Location: ../errors/404.php");
    } else {
        die("ERROR: cannot get the data requested");
    }



 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1><?= $singleBook['book_name']; ?></h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="./books/update.php?id=<?= $singleBook['bookID']; ?>">Edit</a>
             <a class="btn btn-outline-danger" href="./books/confirm_delete.php?id=<?= $singleBook['bookID']; ?>">Delete</a>
         </div>
     </div>

     <div class="row mb-2">
        <div class="col-xs-12 col-sm-4 align-self-center">
            <img class="img-fluid" src="./images/uploads/<?= $singleBook['image_name']; ?>" alt="Card image cap">
        </div>
        <div class="col-xs-12 col-sm-8 align-self-center">
            <h3><?= $singleBook['book_name']; ?></h3>
            <h4><?= $singleBook['author']; ?></h4>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-12">
            <p>
                <?= $singleBook['description']; ?>
            </p>
        </div>
    </div>


 </div>


<?php require '../templates/footer.php' ?>
