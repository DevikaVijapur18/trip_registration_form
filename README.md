

# Trip Registration System

A visually stunning, glassmorphism-inspired web application for trip registrations using PHP and MySQL. 

## 🚀 Features

* **Modern Glassmorphism UI:** A high-end, responsive interface featuring floating decorative elements and glass-card effects.
* **Full-Stack Integration:** Seamless connection between a PHP backend and a MySQL database.
* **Secure Data Handling:** Uses `mysqli_real_escape_string` to prevent basic SQL injection.
* **Dynamic Feedback:** Real-time success messaging upon successful database insertion.
* **Animated Experience:** Smooth fade-in animations for form elements to enhance user engagement.

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3 (Custom animations, Flexbox/Grid)
* **Backend:** PHP
* **Database:** MySQL
* **Design:** Google Fonts (Playfair Display, Inter), SVG Icons

## 📋 Database Schema

To run this project, create a database named `trip` and a table named `trip` with the following structure:

| Column | Type | Description |
| --- | --- | --- |
| `sno` | INT (AI) | Primary Key |
| `name` | TEXT | Full name of the participant |
| `age` | INT | Age of the participant |
| `gender` | VARCHAR(50) | Gender selection |
| `email` | VARCHAR(50) | Email address |
| `phone` | VARCHAR(12) | Contact number |
| `other` | TEXT | Additional notes/dietary requirements |
| `dt` | DATETIME | Registration timestamp |

## ⚙️ Installation & Setup

1. **Clone the Repository:**
```bash
git clone https://github.com/your-username/trip-registration-form.git

```


2. **Move to XAMPP:** Place the folder in your `C:\xampp\htdocs\` directory.
3. **Database Setup:**
* Open **phpMyAdmin**.
* Create a database named `trip`.
* Run a SQL query to create the table structure mentioned above.
  Here is the SQL code to create your database and table structure. You can copy and paste this directly into the **SQL** tab in your phpMyAdmin.

```sql
CREATE DATABASE IF NOT EXISTS `trip`;
USE `trip`;

CREATE TABLE `trip` (
  `sno` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `age` INT(3) NOT NULL,
  `gender` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(12) NOT NULL,
  `other` TEXT NOT NULL,
  `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```

### How to use this:

1. Open **XAMPP Control Panel** and start **Apache** and **MySQL**.
2. Click the **Admin** button next to MySQL to open **phpMyAdmin**.
3. Click the **SQL** tab at the top of the screen.
4. Paste the code above into the text box.
5. Click **Go** at the bottom right.

Once you do this, your `index1.php` file will be able to successfully insert data into the database without the "Connection failed" or "Table not found" errors.




4. **Run the App:**
* Start Apache and MySQL in XAMPP.
* Navigate to `http://localhost/trip-registration-form/index1.php` in your browser.



