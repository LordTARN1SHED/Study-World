# Study World - Web Page Design

## Author Information
- **Name**: Feng Zhexi  
- **Student ID**: 21211019  

---

## Project Overview
Study World is a web project built using HTML, CSS, JavaScript, PHP, and MySQL. It includes features such as user registration and login, file upload and download, and displaying learning resources.

---

## File Structure
- `Document/`: Stores downloadable files
- `Fzx/`: Contains images used on the website
- `Upload/`: Stores uploaded files
- `bg.jpg`: Background image
- `download.php`: Implements file downloading
- `fzx.css`: Custom CSS style 1
- `fzx.jpg`: Profile picture
- `fzx2.css`: Custom CSS style 2
- `login.php`: Implements user login
- `modify.php`: Implements account password modification
- `resume.php`: User profile page
- `sign.php`: Implements user registration
- `style.css`: Custom CSS style 3
- `upFile.php`: Implements file uploading
- `.html` files: Various web pages

---

## Page Structure
The project includes multiple functional pages, such as the homepage, user management pages, file transfer pages, and a user profile page, supporting interactive operations and dynamic updates.

---

## Features
### 1. Registration, Login, and Modification
- **Database Interaction**: User registration, login, and modification are implemented using MySQL.
  - Registration: Writes user information into the database.
  - Login: Verifies account and password by querying the database.
  - Modification: Updates information based on the student ID as the key.
- **Input Validation**: Registration page uses regular expressions to validate phone numbers, email addresses, and passwords.

### 2. Homepage Features
- Video playback for learning resources.
- Page navigation with directory links.
- JavaScript-based carousel functionality.
- CSS enhancements for improved aesthetics and user experience.

### 3. File Transfer
- **File Upload**: Allows users to upload files to a designated server folder.
- **File Download**: Users can download files from a specific folder.

### 4. User Profile
- Displays the logged-in user’s personal information using `session` for data management.

---

## Technical Implementation
### Frontend
- **HTML**: Structures the web pages.
- **CSS**: Provides custom styles and design.
- **JavaScript**: Enables interactive features such as form validation and carousels.

### Backend
- **PHP**: Handles user requests, data interactions, dynamic page generation, and file management.
- **MySQL**: Manages user data with support for CRUD operations.

---

## File Descriptions
| File Name      | Description                               |
|----------------|-------------------------------------------|
| `download.php` | Implements file download functionality    |
| `login.php`    | Implements user login functionality       |
| `modify.php`   | Implements account password modification  |
| `resume.php`   | Displays user profile information         |
| `sign.php`     | Implements user registration functionality|
| `upFile.php`   | Implements file upload functionality      |
| `.html` files  | Various functional pages                  |

---

## Technology Stack
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
