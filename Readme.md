# Library CMS Project
This site will be a full functional Content Management System for a small Library.
It will be able to view the books in them, add new ones, edit existing books as well as delete them.

## Set Up
```bash
# Clone the repo
git clone https://github.com/18WDWU02/Library-CMS.git
cd Library-CMS
# Install the dependancies
composer install
```
Create a .env file in your root directory. An example has been given of what the variable names need to be.

PROJECT_URL= URL TO ROOT DIRECTORY<br />
DB_HOST= DATABASE HOST<br />
DB_USER= DATABASE USERNAME<br />
DB_PASS= DATABASE PASSWORD<br />
DB_TABLE= DATABASE TABLE NAME<br />

A copy of the database is included in the repo (library.sql).
It doesn't matter what your database name is, as long as you put the right one in the .env file


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

#### Task 4
Using the update query, create a new form which will update existing entries in your database
1. Make sure you are still validating the form, even though the data is there on the load, people can still edit it to fail validation
2. If there is something which the user doesn't need to change, then make sure to include the validation if they do change it
3. Remove any references of the old entry from your project ie. old images, files


#### Task 5
Using the delete query, add the ability to delete entries from the database
1. Create a confirm delete page just incase the users press the button by accident. This page should be linked to the book the user clicks on
2. Delete any images that are linked to this entry as well

### Updates to the site
We have now finished with the main part of CRUD. We have made a few more edits onto the database so you will need to include the new .sql file which has been provided (you will have to delete your old table if you want to import the new ones)
<br />
What has been added is a authors table which will include a list of all the authors which people have included. This will help for preventing anyone from having to add the same author in multiple times. We have also edited the books table to not have the authors name, but rather the ID of the author which is in the authors table. There is also a relationship between the two tables to say what book belongs to what author.

You will have to do edits throughout the entire project to make sure that things now match up to the new way the database is asking for the books and authors

#### Task 6
1. Rewrite our add query to suit our new way of adding authors
2. Edit the update file to match the add
3. Create a page which has a list of all the authors
4. Click on each individual author and view all the books which they have made
