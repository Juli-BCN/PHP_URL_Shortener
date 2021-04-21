# PHP_URL_Shortener
PHP Code to Shorten URLs and create links and redirection


## It uses a database with the following details:
> DB Name: LPURLS

> Table Name: testurls

> Username: lpurlsuser

> Password: lpurlspasswd


## The table contains three fields:
> id: int(11)

> url: varchar(512)

> shortened: varchar(255)


## To create the user and database from mySQL Command Line, use the following commands:
> CREATE USER 'lpurlsuser'@'localhost';

> ALTER USER 'lpurlsuser'@'localhost' IDENTIFIED BY 'lpurlspasswd';

> GRANT ALL PRIVILEGES ON *.* TO 'lpurlsuser'@'localhost';

> FLUSH PRIVILEGES;

> CREATE DATABASE LPURLS;


## To create the table and fields, use the following commands:
> USE LPURLS;
> CREATE TABLE testurls(
   id INT AUTO_INCREMENT,
   url VARCHAR(512),
   shortened VARCHAR(255),
   PRIMARY KEY ( id )
);
