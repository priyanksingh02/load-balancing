docker run -d -p 7001:80 --name php-1 -v "$PWD"/php1:/var/www/html php:7.2-apache
docker run -d -p 7002:80 --name php-2 -v "$PWD"/php2:/var/www/html php:7.2-apache
docker run -d -p 7003:80 --name php-3 -v "$PWD"/php3:/var/www/html php:7.2-apache

# create event.log files with public write
# issue fix: Permission denied error when writing into file
touch php2/event.log php3/event.log
chmod 666 php2/event.log php3/event.log
