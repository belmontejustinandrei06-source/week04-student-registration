LMAO yeah bro 😭 — **that's not the full README**. Your paste cuts off during the Laravel Request Lifecycle section at:

```text
            Browser
```

So **don't add the Features section based on what I said yet**. We need to get your README complete and clean first.

Also, I noticed your pasted Markdown has escaped formatting like:

```text
**# Week 04 – Student Registration System**
```

and

```text
**## 1. Project Title**
```

That will make the README look wrong on GitHub because the `**` are being used around the headings.

### Let's fix the README properly

Since your README is currently incomplete, **replace the entire `README.md`** with the clean version I gave you earlier, but we'll make the structure correct:

````markdown
# Week 04 – Student Registration System

A Laravel-based Student Registration System developed for the Week 04 Laboratory Activity in ITST 302 – Client-Server Technologies.

## 1. Project Title

### Student Registration System

**Course:** ITST 302 – Client-Server Technologies  
**Week:** 04  
**Project:** Mini Project 03 – Student Registration System  
**Framework:** Laravel  
**Database:** MySQL

## 2. Introduction

The Student Registration System is a web-based application developed using Laravel that allows users to register and manage student information digitally.

The application allows users to enter a student's personal and academic information, upload a profile picture, and view the registered student's profile after successful registration.

Laravel server-side validation is used to prevent incomplete, invalid, or duplicate information from being stored in the database.

## 3. Objectives

- Create a student registration form using Laravel Blade.
- Implement server-side validation.
- Prevent duplicate Student IDs and email addresses.
- Validate email addresses and mobile numbers.
- Implement profile picture upload functionality.
- Store uploaded images using Laravel Storage.
- Store student information in MySQL.
- Display validation errors.
- Display success flash messages.
- Display registered student information.
- Use Laravel controllers to process requests.
- Use Git and GitHub for version control.

## 4. Laravel Request Lifecycle

The registration process follows this lifecycle:

```text
Browser
   ↓
Registration Form
   ↓
POST /students
   ↓
StudentController
   ↓
Validation
   ↓
Is the data valid?
   ├── No → Display validation errors
   │
   └── Yes
        ↓
   Save student information
        ↓
   Upload profile picture
        ↓
   Save image path
        ↓
   MySQL students table
        ↓
   Success message
        ↓
   Student Profile
        ↓
   Browser
````

## 5. Validation Rules

| Field           | Validation                                 |
| --------------- | ------------------------------------------ |
| Student ID      | Required and unique                        |
| First Name      | Required                                   |
| Middle Name     | Optional                                   |
| Last Name       | Required                                   |
| Email           | Required, valid email, unique              |
| Mobile Number   | Required and numeric                       |
| Date of Birth   | Required                                   |
| Gender          | Required                                   |
| Program         | Required                                   |
| Year Level      | Required                                   |
| Address         | Required                                   |
| Profile Picture | Required, image, JPG/JPEG/PNG, maximum 2MB |

## 6. Database Design

The application uses a MySQL `students` table.

| Column          | Type      | Constraint  |
| --------------- | --------- | ----------- |
| id              | BIGINT    | Primary Key |
| student_id      | VARCHAR   | Unique      |
| first_name      | VARCHAR   | Required    |
| middle_name     | VARCHAR   | Nullable    |
| last_name       | VARCHAR   | Required    |
| email           | VARCHAR   | Unique      |
| mobile_number   | VARCHAR   | Required    |
| date_of_birth   | DATE      | Required    |
| gender          | VARCHAR   | Required    |
| program         | VARCHAR   | Required    |
| year_level      | VARCHAR   | Required    |
| address         | TEXT      | Required    |
| profile_picture | VARCHAR   | Required    |
| created_at      | TIMESTAMP | Laravel     |
| updated_at      | TIMESTAMP | Laravel     |

### ERD

![Student Registration ERD](docs/Student_Registration_ERD.png)

## 7. Registration Flowchart

![Student Registration Flowchart](docs/Student_Registration_Flowchart.png)

## 8. Laravel Request Lifecycle Diagram

![Laravel Request Lifecycle](docs/Laravel_Request_Lifecycle_Diagram.png)

## 9. Screenshots

### Registration Form

![Registration Form](screenshots/registration-form.png)

### Validation Errors

![Validation Errors](screenshots/validation-errors.png)

### Successful Registration

![Successful Registration](screenshots/successful-registration.png)

### Database Records

![Database Records](screenshots/database-records.png)

### Project Structure

![Project Structure](screenshots/project-structure.png)

### GitHub Repository

![GitHub Repository](screenshots/06-github-repository.png)

### Terminal Output

![Terminal Output](screenshots/07-terminal-output.png)

### Browser Output

![Browser Output](screenshots/08-browser-output.png)

## 10. Problems Encountered and Solutions

### Profile Picture Not Displaying

The uploaded profile picture was successfully stored, but the image initially returned a `403 Forbidden` error when accessed through the browser.

The issue was resolved by creating Laravel's public storage link:

```powershell
php artisan storage:link
```

The uploaded file was also verified using Laravel Tinker.

```php
Storage::disk('public')->exists($student->profile_picture);
```

The result was:

```text
true
```

This confirmed that the uploaded file existed on the public storage disk.

### Wrong Project Directory

Running:

```powershell
php artisan serve
```

initially failed because the terminal was in the wrong directory.

After moving into the directory containing the `artisan` file, the Laravel development server started successfully.

## 11. Reflection

This Week 04 activity helped me understand how Laravel handles forms, validation, database operations, and file uploads.

One of the most important things I learned was the importance of server-side validation. A registration form should not simply accept any information entered by a user. Laravel validation allows the application to check whether required fields are completed, whether email addresses are valid, and whether unique fields such as Student ID and email already exist.

I also learned how Laravel handles file uploads. The profile picture feature required the image to be validated, stored using Laravel Storage, and connected to the student's database record through the stored file path. I encountered a problem where the image existed but was not displaying because the public storage link was not available. Troubleshooting this issue helped me understand how Laravel connects the storage directory to the public directory.

Another important lesson was understanding the Laravel request lifecycle. The browser sends a request to a route, the route directs the request to the controller, the controller validates the information, and the model communicates with the database. Understanding this process makes it easier to organize Laravel applications and troubleshoot problems.

The project also improved my understanding of database design. The `students` table stores the student's personal and academic information, while unique constraints help prevent duplicate records.

Overall, the activity improved my practical knowledge of Laravel, MySQL, Blade templates, validation, file storage, and Git. These concepts can be applied to larger applications such as school management systems, employee systems, e-commerce applications, and other enterprise systems.

## 12. References

Laravel. (n.d.). *Laravel documentation*. [https://laravel.com/docs](https://laravel.com/docs)

PHP Documentation Group. (n.d.). *PHP manual*. [https://www.php.net/docs.php](https://www.php.net/docs.php)

MySQL. (n.d.). *MySQL documentation*. [https://dev.mysql.com/doc/](https://dev.mysql.com/doc/)

MDN Web Docs. (n.d.). *MDN Web Docs*. [https://developer.mozilla.org/](https://developer.mozilla.org/)

## 13. Project Structure

```text
week04-student-registration/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── docs/
│   ├── Student_Registration_Flowchart.png
│   ├── Student_Registration_ERD.png
│   └── Laravel_Request_Lifecycle_Diagram.png
├── public/
├── resources/
├── routes/
├── screenshots/
├── storage/
├── tests/
├── artisan
├── composer.json
├── package.json
└── README.md
```

## 14. System Features

* Student registration
* Server-side validation
* Unique Student ID validation
* Unique email validation
* Email format validation
* Mobile number validation
* Profile picture upload
* JPG/JPEG/PNG image validation
* 2MB maximum image size
* MySQL database integration
* Student profile display
* Success flash messages
* Validation error messages
* Responsive user interface
* Laravel Storage integration


