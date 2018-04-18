#!/bin/bash

sed -i "s/#ServerName www.example.com:80/ServerName 127.0.0.1:80/g" /etc/httpd/conf/httpd.conf
