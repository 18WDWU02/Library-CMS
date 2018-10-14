<?php

    require 'vendor/autoload.php';
    // import the Intervention Image Manager Class
    use Intervention\Image\ImageManager;

    if($_POST){
        extract($_POST);
        $errors = array();

        if(!$title){
            array_push($errors, "Title is required, please enter a value");
        } else if(strlen($title) < 2){
            array_push($errors, "Please enter at least 2 characters for your Title");
        } else if(strlen($title) > 100){
            array_push($errors, "The title can't be more than 100 characters");
        }

        if(!$author){
            array_push($errors, "An author is required, please enter a value");
        } else if(strlen($author) < 2){
            array_push($errors, "Please enter at least 2 characters for the author");
        } else if(strlen($author) > 100){
            array_push($errors, "The Author Name can't be more than 100 characters");
        }

        if(!$description){
            array_push($errors, "A description is required, please enter a value");
        } else if(strlen($description) < 10){
            array_push($errors, "The description must be at least 10 characters long");
        } else if(strlen($description) > 1000){
            array_push($errors, "The description needs to be less than 1000 characters");
        }

        if(isset($_FILES["image"])){
            $fileSize = $_FILES["image"]["size"];
            $fileTmp = $_FILES["image"]["tmp_name"];
            $fileType = $_FILES["image"]["type"];

            //If the file is over 5mb

            if($fileSize == 0){
                array_push($errors, "You must include an Image");
            } else if($fileSize > 5000000){
                array_push($errors, "The file is to large, must be under 5MB");
            } else {
                $validExtensions = array("jpeg", "jpg", "png");
                $fileNameArray = explode(".", $_FILES["image"]["name"]);
                $fileExt = strtolower(end($fileNameArray));
                if(in_array($fileExt, $validExtensions) === false){
                    array_push($errors, "File type not allowed, can only be a jpg or png");
                }
            }
        }

        if(empty($errors)){
            $destination = "images/uploads";
            if(! is_dir($destination) ){
                mkdir("images/uploads/", 0777, true);
            }
            $newFileName = uniqid() .".".  $fileExt;
            // move_uploaded_file($fileTmp, $destination."/".$newFileName);
            $manager = new ImageManager();
            $mainImage = $manager->make($fileTmp);
            $mainImage->save($destination."/".$newFileName, 100);
            $thumbnailImage = $manager->make($fileTmp);
            $thumbDestination = "images/uploads/thumbnails";
            if(! is_dir($thumbDestination)){
                mkdir("images/uploads/thumbnails/", 0777, true);
            }
            $thumbnailImage->resize(300, null, function($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $thumbnailImage->save($thumbDestination."/".$newFileName, 100);

            header("Location: book.php");
        }
    }

    require 'templates/header.php';
 ?>
 <div class="container">
     <div class="row mb-2">
         <div class="col">
             <h1>Add New Book</h1>
         </div>
     </div>
     <?php if($_POST && !empty($errors)): ?>
         <div class="row mb-2">
             <div class="col">
                 <div class="alert alert-danger" role="alert">
                     <ul>
                         <?php foreach($errors as $singleError): ?>
                             <li><?= $singleError; ?></li>
                         <?php endforeach; ?>
                     </ul>
                 </div>
             </div>
         </div>
     <?php endif; ?>

     <div class="row mb-2">
         <div class="col">
             <form action="add.php" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <label for="title">Book Title</label>
                   <input type="text" class="form-control" name="title"  placeholder="Enter book title" value="<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>">
                 </div>

                 <div class="form-group">
                   <label for="author">Author</label>
                   <input type="text" class="form-control"  name="author" placeholder="Enter books author" value="<?php if(isset($_POST['author'])){ echo $_POST['author']; } ?>">
                 </div>

                 <div class="form-group">
                   <label for="description">Book Description</label>
                   <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Description about the book"><?php if(isset($_POST['description'])){ echo $_POST['description']; } ?></textarea>
                 </div>

                 <div class="form-group">
                     <label for="file">Upload an Image</label>
                     <input type="file" name="image" class="form-control-file">
                 </div>

                 <button type="submit" class="btn btn-outline-info btn-block">Submit</button>
             </form>
         </div>
     </div>

 </div>


<?php require 'templates/footer.php' ?>
