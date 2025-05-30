# PHP CRUD1 Project

This project is a simple CRUD (Create, Read, Update, Delete) application built with PHP and MySQL. It allows users to add, view, edit, and delete records from a database. The interface is styled using Bootstrap 5 for a modern and responsive design.

## Features

- **Add New Data:** Easily add new records to the database.
- **View Data:** Display all records in a responsive table.
- **Edit Data:** Update existing records.
- **Delete Data:** Remove records with confirmation.
- **Success Alerts:** Visual feedback for successful operations.

## Technologies Used

- PHP
- MySQL
- Bootstrap 5
- HTML/CSS

## Setup Instructions

1. **Clone the repository or download the source code.**

2. **Set up the database:**
   - Import the provided SQL file (if available) or create a table named `crudoperation` with columns: `ID`, `Name`, `Email`, `Address`.

3. **Configure the database connection:**
   - Edit `dbConnection.php` with your MySQL credentials.

4. **Run the project:**
   - Place the project folder in your web server directory (e.g., `htdocs` for XAMPP).
   - Start your web server and navigate to `http://localhost/PHP/CRUD1/view.php` in your browser.

## File Structure

- `view.php` - Main page to view, edit, and delete records.
- `index.php` - Page to add new records.
- `edit.php` - Page to edit existing records.
- `delete.php` - Script to delete records.
- `dbConnection.php` - Database connection script.
- `view-style.css` - Custom styles for the view page.

## License

This project is for educational purposes