FROM php:7.1

WORKDIR app

COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install && apt-get -y install git

RUN make install