<?php
    /*
        Joins
        -----
        A JOIN is used to combine rows from two or more tables based on a related column between them.

        Types of JOINS in MySQL
        ------------------------
        INNER JOIN	Returns only matching records from both tables
        LEFT JOIN	Returns all records from left table + matching ones from right
        RIGHT JOIN	Returns all from right table + matching ones from left
        FULL JOIN	Returns all records (MySQL doesn’t support directly; use UNION)
        CROSS JOIN	Returns all combinations (Cartesian product)

        Tables
        ------
        CREATE TABLE students (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        city VARCHAR(50)
        );

        CREATE TABLE student_applications (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        student_id INT UNSIGNED NOT NULL,
        course_name VARCHAR(100),
        status ENUM('pending','approved','rejected') DEFAULT 'pending',
        FOREIGN KEY (student_id) REFERENCES students(id)
        );

        Data
        -----
        INSERT INTO students (name, city) VALUES
        ('Sudheer', 'Hyderabad'),
        ('Ravi', 'Vizag'),
        ('Mahesh', 'Chennai');

        INSERT INTO student_applications (student_id, course_name, status) VALUES
        (1, 'PHP Development', 'approved'),
        (1, 'MySQL Advanced', 'pending'),
        (2, 'Laravel Mastery', 'approved');

        INNER JOIN
        ----------
        SELECT s.name, s.city, a.course_name, a.status
        FROM students s
        INNER JOIN student_applications a
        ON s.id = a.student_id;

        LEFT JOIN
        ----------
        SELECT s.name, a.course_name, a.status
        FROM students s
        LEFT JOIN student_applications a
        ON s.id = a.student_id;

        RIGHT JOIN
        ----------
        SELECT s.name, a.course_name, a.status
        FROM students s
        RIGHT JOIN student_applications a
        ON s.id = a.student_id;

        FULL JOIN
        ----------
        SELECT s.name, a.course_name
        FROM students s
        LEFT JOIN student_applications a ON s.id = a.student_id
        UNION
        SELECT s.name, a.course_name
        FROM students s
        RIGHT JOIN student_applications a ON s.id = a.student_id;

        CROSS JOIN
        -----------
        SELECT s.name, a.course_name
        FROM students s
        CROSS JOIN student_applications a;

    */
?>