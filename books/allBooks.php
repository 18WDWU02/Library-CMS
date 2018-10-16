<?php
    require '../templates/header.php';

    $sql = "SELECT `id`, `book_name`, `image_name` FROM `books` WHERE 1";
    $result = mysqli_query($dbc, $sql);
    if($result){
        $allBooks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        die("ERROR: something went wrong, cannot get the books");
    }


 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>All Books</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <a class="btn btn-outline-primary" href="./books/add.php">Add new Book</a>
         </div>
     </div>

     <div class="row">
          <?php if($allBooks): ?>

              <?php foreach($allBooks as $singleBook): ?>
                  <div class="col-md-3">
                      <div class="card mb-4 shadow-sm">
                          <img class="card-img-top" src="./images/uploads/medium/<?= $singleBook['image_name']; ?>" alt="Card image cap">
                          <div class="card-body">
                              <p class="card-text"><?= $singleBook['book_name'];  ?></p>
                              <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                      <a href="./books/book.php?id=<?= $singleBook['id']; ?>" class="btn btn-sm btn-outline-info">View</a>
                                      <a href="./books/update.php?id=<?= $singleBook['id']; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>

          <?php else: ?>
              <div class="col">
                  <p>Sorry, there aren't any books in the library at the moment.</p>
              </div>
          <?php endif; ?>


    </div>


 </div>


<?php require '../templates/footer.php' ?>
