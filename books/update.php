<?php
    require '../templates/header.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM `books` WHERE id = $id";
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
             <h1>Edit <?= $singleBook['book_name']; ?></h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <form action="./books/update.php?id=<?= $singleBook['id']; ?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label for="title">Book Title</label>
                   <input type="text" class="form-control"  placeholder="Enter book title" value="<?= $singleBook['book_name']; ?>">
                 </div>

                 <div class="form-group">
                   <label for="author">Author</label>
                   <input type="text" class="form-control"  placeholder="Enter books author" value="<?= $singleBook['author']; ?>">
                 </div>

                 <div class="form-group">
                   <label for="author">Book Description</label>
                   <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Description about the book"><?= $singleBook['description']; ?></textarea>
                 </div>

                 <div class="form-group">
                     <img src="./images/uploads/thumbnails/<?= $singleBook['image_name']; ?>" alt="Card image cap"><br>
                     <label for="file">Upload an Image</label>
                     <input type="file" name="image" class="form-control-file">
                 </div>

                 <button type="submit" class="btn btn-outline-info btn-block">Submit</button>
             </form>
         </div>
     </div>

 </div>


<?php require '../templates/footer.php' ?>
