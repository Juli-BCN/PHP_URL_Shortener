# PHP_URL_Shortener
PHP Code to Shorten URLs and create links and redirection

Put this code on the directory url on your webserver
It uses a database with the following details:
DB Name: LPURLS
Table Name: testurls
Username: lpurlsuser
Password: lpurlspasswd

The table contains three fields:
id 	      int(11)
url	      varchar(512)
shortened	varchar(255)
