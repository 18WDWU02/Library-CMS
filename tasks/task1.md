# Library CMS Project

This site will be a full functional Content Management System for a small Library.
It will be able to view the books in them, add new ones, edit existing books as well as delete them.

## Task

**Task 1**
Create a basic website which just includes a few pages. What we are including are
- index.html (the home page of the site)
- books/allBooks.html (a list of all the books)
- books/add.html (the form which is used to add books)
- books/book.html (the single book page)
- books/update.html (the form which is used to update the entries)
- books/confirm_delete.html (a page which we will confirm a delete of the book)

1. Create the site using plain HTML and CSS, make it look like how you want it to look at the end. The pages you need to work on are.
2. The Form for adding and deleting must include
    - Book title
    - Author Name
    - Description
    - Image upload.
3. Convert the site into PHP my splitting it up into templates.
4. Create php form validation so that that matches the database settings
   - book name - text, max char 100
   - author - text, max char 100
   - description - text, max car 1000
   - Image - jpg, png (name of the file including extension cant be more than 20 characters)
5. Add image intervention to be able to crop the images to suit your design.
