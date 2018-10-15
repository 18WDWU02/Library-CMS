# Library CMS Project

This site will be a full functional Content Management System for a small Library.
It will be able to view the books in them, add new ones, edit existing books as well as delete them.

## Tasks
Here are all the tasks given in these lessons. They will all be individually listed in the [task folder in the repo ](https://github.com/18WDWU02/Library-CMS/tree/master/tasks), but all listed bellow.

Do these tasks either on this repo, or on a new project you have created (a portfolio is a great project to use this on).

#### Task 1
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

#### Task 2
Using the an insert query, create a new section which can be added onto the site, ie. movies, music, etc.
1. Create the necessary pages for adding
2. Validate the form, including any inputs
3. Write the sql query (take the example from phpmyadmin and then work backwards)
4. Test the query in phpmyadmin before allowing the form to completely finish
5. Once query is successful and the form submits properly, redirect the form to a page which will be the single page

#### Task 3
Using the select query, view the entires which you created in the previous task.
1. View them all on one single page
2. View them individually from a single php page which filters which one you see based on your url
3. Create an error 404 page incase someone asks for an entry which doesn't exist
4. Add the select query to the update page to be able to see the information which you are updating, based on the entry you are requesting
**Extra Tasks**
Create more complex queries like getting the latest entry, getting the smallest, largest etc.
