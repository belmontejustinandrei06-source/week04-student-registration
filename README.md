# Week 04 – Student Registration System

A Laravel-based Student Registration System developed for the Week 04 Laboratory Activity in ITST 302 – Client-Server Technologies.

---

## 1. Project Title

### Student Registration System

**Course:** ITST 302 – Client-Server Technologies  
**Week:** 04  
**Project:** Mini Project 03 – Student Registration System  
**Framework:** Laravel  
**Database:** MySQL

---

## 2. Introduction

The Student Registration System is a web-based application developed using Laravel that allows users to register and manage student information digitally. The system replaces a traditional paper-based registration process with an organized online form that collects student information and stores it in a MySQL database.

The application allows users to enter a student's personal and academic information, upload a profile picture, and view the registered student's profile after successful registration.

Data validation is an important part of the system because it prevents incomplete, invalid, or duplicate information from being stored in the database. Laravel's server-side validation ensures that submitted information follows the required rules before it is saved.

Registration systems are commonly used in enterprise applications such as universities, companies, hospitals, banks, and government systems. They provide a structured way of collecting, validating, storing, and displaying information.

This project demonstrates Laravel forms, request handling, server-side validation, flash messages, file uploads, Laravel Storage, database migrations, controllers, Blade templates, and MySQL integration.

---

## 3. Objectives

After completing this activity, the following objectives were accomplished:

- Created a professional student registration form using Laravel Blade.
- Implemented server-side validation for student information.
- Prevented duplicate Student IDs and email addresses.
- Validated email addresses and mobile numbers.
- Implemented profile picture upload functionality.
- Stored uploaded images using Laravel Storage.
- Created a MySQL `students` table using Laravel migrations.
- Displayed validation error messages.
- Displayed a success flash message after registration.
- Displayed registered student information through a profile page.
- Used Laravel controllers to process requests.
- Used Git and GitHub for version control and project submission.
- Practiced documenting the software development process using Markdown.

---

## 4. Laravel Request Lifecycle

The registration process follows Laravel's request lifecycle.

```text
┌──────────────────────┐
│       Browser        │
│ Registration Form    │
└──────────┬───────────┘
           │
           ▼
┌──────────────────────┐
│        Route         │
│ POST /students       │
└──────────┬───────────┘
           │
           ▼
┌──────────────────────┐
│      Controller      │
│ StudentController    │
└──────────┬───────────┘
           │
           ▼
┌──────────────────────┐
│      Validation      │
│ Required / Unique /  │
│ Email / Image / etc. │
└──────────┬───────────┘
           │
       Valid?
       /     \
     No       Yes
     │         │
     ▼         ▼
 Show Errors  Model
               │
               ▼
        ┌──────────────┐
        │    MySQL     │
        │   students   │
        └──────┬───────┘
               │
               ▼
        Upload Profile
           Picture
               │
               ▼
        Success Response
               │
               ▼
        Student Profile
               │
               ▼
            Browser