
sudo apt-get update
sudo apt-get -y upgrade
sudo apt-get install -y nginx
sudo apt-get install -y php-fpm



sudo ln -s /vagrant/provision/nginx.conf /etc/nginx/sites-enabled/taskseuler.loc

sudo service nginx restart