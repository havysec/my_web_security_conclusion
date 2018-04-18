FROM centos:centos6

RUN yum -y update; yum clean all
RUN yum -y install epel-release; yum clean all
RUN yum -y install mysql-server mysql pwgen supervisor bash-completion psmisc net-tools; yum clean all
RUN yum -y install vim tar wget zip unzip httpd php; yum clean all
RUN yum -y install php-mysql php-gd libjpeg* php-imap php-ldap php-odbc php-pear php-xml php-xmlrpc php-mbstring php-mcrypt php-bcmath php-mhash libmcrypt; yum clean all

ADD ./start.sh /start.sh
ADD ./config_mysql.sh /config_mysql.sh
ADD ./supervisord.conf /etc/supervisord.conf
ADD ./config_httpd.sh /config_httpd.sh

# RUN echo %sudo	ALL=NOPASSWD: ALL >> /etc/sudoers

RUN chmod 755 /start.sh
RUN chmod 755 /config_mysql.sh
RUN chmod 755 /config_httpd.sh
RUN /config_mysql.sh
RUN /config_httpd.sh

EXPOSE 3306

CMD ["/bin/bash", "/start.sh"]
