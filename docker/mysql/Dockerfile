FROM mysql:5.7

RUN apt-get update && apt-get -y install locales-all

ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV LC_ALL ja_JP.UTF-8

COPY my.cnf /etc/mysql/conf.d/my.cnf