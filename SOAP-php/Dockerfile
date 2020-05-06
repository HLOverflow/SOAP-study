FROM nimmis/apache-php7
RUN apt-get update && apt-get install -y php-soap
RUN apt-get install -y tcpdump
WORKDIR /var/www/html
COPY ./src/* /var/www/html/
