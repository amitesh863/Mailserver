# Mailserver
Database is provided within the folder named 10am.sql .
Import the databse and run the project.
You can change the attachment limit by modifying php.ini file.
Try increasing the following values in php.ini, for example:


memory_limit = 4096M
upload_max_filesize = 3072M
post_max_size = 4096M

ADDITIONAL INFORMATION:

If the upload_max_filesize is larger than post_max_size, you must increase post_max_size so that it is bigger than upload_max_size.

If the value of post_max_size is larger than memory_limit, you must increase memory_limit so that it is larger than post_max_size.
