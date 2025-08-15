PHP MySQL CRUD Application

This project is a beginner-friendly CRUD (Create, Read, Update, Delete) web application built with PHP, MySQL, and Bootstrap 4. It demonstrates the core functionality of interacting with a database through a simple user interface. The system enables you to add new users, view stored records, update existing information, and delete unwanted entries directly from the browser.

The application consists of five main PHP files:

connect.php – Handles the connection between PHP and the MySQL database using the mysqli extension. It stores the database hostname, username, password, and database name in variables and establishes the connection, which is then reused across other files by including this script.

display.php – The home page of the CRUD app. It retrieves all records from the crud table in the database using a SELECT query and displays them in a Bootstrap-styled table. Each record includes an Update button to edit user details and a Delete button to remove the entry. This file uses a while loop to dynamically generate rows for each record fetched from the database.

user.php – Contains a form to add a new record to the database. When the form is submitted, the data is processed with an INSERT SQL query to store it in the crud table. Basic Bootstrap form controls are used for styling and responsiveness.

update.php – Used for editing an existing record. When a user clicks the Update button from display.php, it passes the record’s ID via the GET method. The form on this page allows modifying the name, email, phone number, and password. On submission, the updated values are saved using an UPDATE SQL query.

delete.php – Deletes a record from the database when triggered from the Delete button in display.php. It uses the record’s ID passed through the URL and executes a DELETE SQL query to remove it permanently.

How It Works

Database Setup – Create a MySQL database (e.g., crudapp) in phpMyAdmin. Inside this database, create a table named crud with the following columns:

id (INT, Primary Key, Auto Increment)

name (VARCHAR)

email (VARCHAR)

phoneno (VARCHAR)

password (VARCHAR)

Connecting to the Database – The connect.php script contains the connection logic using mysqli_connect(). If the connection fails, it halts execution with an error message.

Adding a Record – On user.php, the form data is sent via the POST method. PHP sanitizes the values and sends them to the database with an INSERT statement.

Displaying Data – On display.php, the app retrieves all records with SELECT * FROM crud and renders them in a responsive table.

Updating Data – When the Update button is clicked, the record’s ID is passed to update.php using GET. The form allows changes, and the updated values are stored with an UPDATE query.

Deleting Data – Clicking Delete passes the record’s ID to delete.php, which runs a DELETE query to remove the entry.

Requirements

XAMPP (or any local server with PHP and MySQL support)

PHP 7 or above

MySQL 5.6 or above

Web browser (Chrome, Firefox, Edge, etc.)

Internet connection for loading Bootstrap from CDN

Installation Steps

Download or clone the project into the htdocs directory of XAMPP.

Start Apache and MySQL from the XAMPP Control Panel.

Create the database and table as described above.

Open http://localhost/Crud/display.php in your browser to view the application.
