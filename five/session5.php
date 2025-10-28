<?php
    /*
        Aggregate Functions
        -------------------
        Aggregate functions perform a caluculation on qa set of columns and retun a single value
        COUNT() - Count total rows
        AVG() - Caluculate average
        SUM() - Caluculate sum
        MIN() - Finds smallest value
        MAX() - FIndslargest value

        Table
        -----
        CREATE TABLE orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_name VARCHAR(50),
        product VARCHAR(50),
        amount DECIMAL(10,2),
        city VARCHAR(50)
        );

        Data
        ----
        INSERT INTO orders (customer_name, product, amount, city) VALUES
        ('Sudheer', 'Mobile', 20000, 'Hyderabad'),
        ('Sudheer', 'Headphones', 3000, 'Hyderabad'),
        ('Ravi', 'Laptop', 55000, 'Vizag'),
        ('Ravi', 'Mouse', 800, 'Vizag'),
        ('Mahesh', 'Tablet', 15000, 'Chennai');

        Aggregate functions usage without group by
        ------------------------------------------
        SELECT COUNT(*) AS total_orders FROM orders;
        SELECT SUM(amount) AS total_sales FROM orders;
        SELECT AVG(amount) AS avg_order_value FROM orders;
        SELECT COUNT(*) AS total_orders FROM orders;

        Aggregate functions usage with group by
        ---------------------------------------
        SELECT customer_name, SUM(amount) AS total_spent
        FROM orders
        GROUP BY customer_name;

        SELECT customer_name, COUNT(*) AS total_orders
        FROM orders
        GROUP BY customer_name;

        SELECT city, customer_name, SUM(amount) AS total
        FROM orders
        GROUP BY city, customer_name;

        Having
        ------
        Used after group by aggregate conditions
        Without group by also we can use having condition
        We can apply having on alias name also

        SELECT customer_name, SUM(amount) AS total_spent
        FROM orders
        GROUP BY customer_name
        HAVING total_spent > 20000;





    */
?>