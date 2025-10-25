<?php
    /*
        Data Types
        ----------
        INT, Tiny INT, Big INT - Whole numbers - age, id, numbers - 1,2,3 etc..
        Decimal, Float, Double - Decimal Numbers - marks, prices - 10.20, 20.5
        Varchar - Variable length - email, name
        Char - Fixed length - gender, status in text format (success, failure)
        ENUM - Limited set of values - values must come from these only - it will act as based on strct mode
        JSON - json formatted data
        Text, Medium text, Large text - Large data
        Date - Dates - YYYY-MM-DD
        Date Time/Timestamp - Date with Time - YYYY-MM-DD H:i:s
        Boolean - true/false

        Null - Value is not mandatory
        NOT NULL - Value is mandatory - if no default value it is an error

        Constraints - These enforce rules at the database level
        ------------
        PRIMARY KEY - uniquely identifies each row
        Only numeric values
        It must auto increment
        Can we havbe a composite PRIMARY KEY also - Including multiple columns in PRIMARY KEY but only one is auto incremented

        eg - id int auto_increment NOT NULL PRIMARY KEY

        UNIQUE KEY
        ----------
        It will keep column values are unique - like restricting same email address in multiple rows
        It prevent duplicates
        We can have multipl unique constraints in the same table

        DEFAULT KEY
        -----------
        It takes default value if no value received as input

        FOREIGN KEY
        -----------
        Link 2 tables
        Enforces referential integrity(cannot have invalid references)

        eg
        FOREIGN KEY (user_id) REFERENCES  users(id) ON DELETE CASCADE,
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE

        MODIFY TABLE
        -------------
        ALTER TABLE users ADD COLUMN name varchar(50) NOT NULL DEFAULT 'Sudheer';

        ALTER TABLE users MODIFY COLUMN name varchar(10) NOT NULL DEFAULT 'Kumar';

        ALTER TABLE users DROP COLUMN name;





        💻 Mini SQL Task (Day 2)

Create categories table (id, name, description, created_at)

Insert 3 categories

Modify products table: add category_id (INT, NOT NULL)

Add foreign key: products.category_id → categories.id

Update products table: default stock = 10

Try inserting product without name → see error

Insert product without stock → check default

Create tasks table like above

Insert 5 tasks with varying priorities/statuses

Delete a user → observe cascading deletion of tasks

🧠 Interview Questions (Day 2)

Theory

Difference between NULL and NOT NULL with example

What is a UNIQUE key? How is it different from PRIMARY KEY?

Explain FOREIGN KEY and ON DELETE CASCADE

Difference between VARCHAR and TEXT

When would you use ENUM vs VARCHAR?

Practical Queries

Create table departments (id, name, manager_id)

Insert 3 records

Add column location with default 'Hyderabad'

Update manager_id for one department

Delete department where name = 'Old Dept'



    */
?>