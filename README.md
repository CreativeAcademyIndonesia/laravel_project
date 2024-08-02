ssh-keygen -t rsa -b 4096 -C "your_email@example.com"

1. Upload Github
2. Uninstall
3. Generate ssh
4. clone repo
5. composer install
6. edit env
7. php artisan key:generate
8. php artisan migrate
9. CREATE USER 'roo'@'localhost' IDENTIFIED BY 'password';
   ALTER USER 'roo'@'localhost' IDENTIFIED BY 'password';
   GRANT ALL PRIVILEGES ON _._ TO 'roo'@'localhost' WITH GRANT OPTION;
   FLUSH PRIVILEGES;
   EXIT;

10. buat database perkuliahan
11. copy database
12. sudo nano /etc/nginx/sites-available/appointment_app
    /var/www/appointment_app/public;
    fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;

sudo ln -s /etc/nginx/sites-available/appointment_app /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx

sudo nano /etc/hostname
localhost

sudo nano /etc/hosts
127.0.0.1 localhost
127.0.1.1 localhost.localdomain localhost

sudo chown -R www-data:www-data /var/www/appointment_app
sudo chmod -R 755 /var/www/appointment_app
