@ECHO OFF
ECHO Starting PHP FastCGI...
set PATH=E:\php-7.2.10;%PATH%
php-cgi -b 127.0.0.1:9123 -c E:\php-7.2.10\php.ini