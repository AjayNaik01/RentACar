# RentACar - Car Rental System

RentACar is a web-based application designed to manage a car rental business. It provides a comprehensive admin panel for managing vehicles, users, and bookings, alongside a user-friendly interface for customers.

## Features

### Administrator Panel
- **Vehicle Management**: Admins can add new cars to the fleet, view all available vehicles, and remove cars from the system.
- **User Management**: View and manage all registered users of the platform.
- **Booking Management**: View and handle booking requests made by users.
- **Feedback Review**: Access and review feedback submitted by customers.
- **Secure Logout**: Admins can securely log out of their session.

### Customer/User Features
- **Feedback Form**: Users can provide valuable feedback on their experience. The form captures ratings and detailed comments.
- **User Registration**: A dedicated registration system for new users (inferred from `regs.css`).
- **Car Details & Booking**: Users can view car details and proceed with booking (inferred from `cardetails.html`).

## Technologies Used

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL
- **Styling**:
  - Bootstrap v3.3.7 for responsive design and UI components.
  - Custom CSS for specific styling (`regs.css`).
- **JavaScript Libraries**:
  - SweetAlert for creating beautiful and responsive alert messages.
- **Emailing**:
  - PHPMailer for handling email functionalities, such as sending feedback forms.

## Prerequisites

To run this project locally, you will need a local server environment that supports PHP and MySQL.
- XAMPP
- WAMP
- MAMP

## Setup and Installation

1.  **Clone the repository or download the project files.**
    ```bash
    git clone <your-repository-url>
    ```
2.  **Move the project folder** to your local server's web root directory (e.g., `htdocs` for XAMPP, `www` for WAMP/MAMP).

3.  **Database Setup:**
    -   Open your database management tool (e.g., phpMyAdmin at `http://localhost/phpmyadmin`).
    -   Create a new database and name it `carproject`.
    -   Select the new `carproject` database from the list on the left.
    -   Click on the "Import" tab at the top.
    -   Under the "File to import" section, click "Choose File" and select the `carproject.sql` file located inside the `database/` directory of the project.
    -   Click the "Go" button at the bottom of the page to run the import. This will create and populate all the necessary tables.

4.  **Configure Database Connection:**
    -   Open the `connection.php` file.
    -   The database is named `carproject` by default. If you used a different name for your database in the previous step, make sure to update it in this file.
    -   Update your database host and password if they differ from the defaults (`localhost` and no password).

5.  **Run the Application:**
    -   Start your Apache and MySQL services from your local server control panel.
    -   Open your web browser and navigate to `http://localhost/CARPROJECT/` (or whatever you named the project folder).

## File Structure

Here is an overview of the key files in the project:

```
CARPROJECT/
├── adminvehicle.php       # Admin page to manage vehicles
├── adminusers.php         # Admin page to manage users
├── admindash.php          # Admin dashboard for feedbacks
├── adminbook.php          # Admin page for booking requests
├── addcar.php             # Form to add a new car
├── upload.php             # Handles file uploads for new cars
├── deletecar.php          # Script to delete a car
├── feedback.html          # Customer feedback form
├── connection.php         # Database connection configuration
├── sweetalert.js          # SweetAlert library
├── database/
│   └── carproject.sql     # SQL dump for database setup
├── css/                   # Custom stylesheets
└── PHPMailer-master/      # PHPMailer library files
```
