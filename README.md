# php-form-2
Simple Form By Using PHP - MYSQL - AJAX

### Demo: http://php-form.ga/

## How To Use

1. Download XAMPP from https://www.apachefriends.org/download.html

2. Install it in C:/ drive.

3. Download the files.

4. Create a new folder in C:\xampp\htdocs\ and copy thes files in that folder.

5. Run the XAMPP and start the APACHE and MYSQL.

6. Click on the MYSQL admin button, this will open the phpmyadmin in your Browser.

7. From left side click on New and write the databse name "formdb" and click Create.

8. Give the table name "candidates" and select 5 columns and click Go.

9. Enter => [ "id", "int(255)", "primary", "auto increment (A.I)" ]

10. Enter => [ "Names", "varchar(255)" ]

11. Enter => [ "Emails", "varchar(255)" ]

12. Enter => [ "Degree", "varchar(255)" ]

13. Enter => [ "Subject", "varchar(255)" ]

14. Now click Go and your table is created.

15. Create a new table name "degree" and select 2 columns and click Go.

16. Enter => [ "main_id", "int(255)", "primary", "auto increment (A.I)" ]

17. Enter => [ "degrees", "varchar(255)" ]

18. Now click Go and your table is created.

19. 15. Create a new table name "subject" and select 2 columns and click Go.

20. Enter => [ "id", "int(255)", "primary", "auto increment (A.I)" ]

21. Enter => [ "subjects", "varchar(255)" ]

22. Enter => [ "main_id", "varchar(255)" ]

23. Now click Go and your table is created.

24. Now GoTo C:\xampp\mysql\bin using cmd and enter "mysql -u root -p -h localhost" and press enter when ask password.

25. Enter "show databases;"

26. Select DataBase by entering "use formdb;"

27. To view your tables, enter "select * from degree;" and "select * from subject;"

28. Now Enter the following commands:
# 
INSERT INTO degree values(1, 'Bachelor');
# 
INSERT INTO degree values(2, 'Master');
# 
INSERT INTO subject values(1, 'AI', '1');
# 
INSERT INTO subject values(2, 'CS', '1');
# 
INSERT INTO subject values(3, 'CE', '1');
# 
INSERT INTO subject values(4, 'SE', '1');
# 
INSERT INTO subject values(5, 'IT', '1');
# 
INSERT INTO subject values(6, 'CS', '2');
#
INSERT INTO subject values(7, 'SE', '2');

29. Now Copy file path of index.php and run it on your Browser.

30. Replace the "file:///C:/xampp/htdocs" with "localhost".

##  

## And You Are Done 😊
