<?php
    require '../templates/header.php';
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Edit Harry Potter and the Philosopher's Stone</h1>
         </div>
     </div>

     <div class="row mb-2">
         <div class="col">
             <form action="./books/update.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label for="title">Book Title</label>
                   <input type="text" class="form-control"  placeholder="Enter book title" value="Harry Potter and the Philosopher's Stone">
                 </div>

                 <div class="form-group">
                   <label for="author">Author</label>
                   <input type="text" class="form-control"  placeholder="Enter books author" value="J.K Rowling">
                 </div>

                 <div class="form-group">
                   <label for="author">Book Description</label>
                   <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Description about the book">Harry Potter has been living an ordinary life, constantly abused by his surly and cold aunt and uncle, Vernon and Petunia Dursley and bullied by their spoiled son Dudley since the death of his parents ten years prior. His life changes on the day of his eleventh birthday when he receives a letter of acceptance into a Hogwarts School of Witchcraft and Wizardrydelivered by a half-giant named Rubeus Hagrid after previous letters had been destroyed by Harry’s Uncle Vernon and his Aunt Petunia. Hagrid explains Harry's hidden past as the wizard son of James and Lily Potter, who were a wizard and witch respectively, and how they were murdered by the most evil and powerful dark wizard of all time, Lord Voldemort, which resulted in the one-year-old Harry being sent to live with his aunt and uncle. The strangest bit of the murder was how Voldemor was unable to kill him, but instead had his own powers removed and blasted away, sparking Harry's immense fame among the magical community</textarea>
                 </div>

                 <div class="form-group">
                     <img data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                     <label for="file">Upload an Image</label>
                     <input type="file" name="image" class="form-control-file">
                 </div>

                 <button type="submit" class="btn btn-outline-info btn-block">Submit</button>
             </form>
         </div>
     </div>

 </div>


<?php require '../templates/footer.php' ?>
