FROM centos:6.6

RUN yum -y update && yum clean all

RUN yum -y install openssh-server passwd vim tar zip unzip wget curl gcc gcc-c++ make libxml2-devel autoconf libtool expat-devel && yum clean all

ADD ./start.sh /start.sh

RUN mkdir /var/run/sshd

RUN ssh-keygen -t rsa -f /etc/ssh/ssh_host_rsa_key -N ''

RUN chmod 755 /start.sh

#COPY ./attachment /

#EXPOSE 22 80

RUN ./start.sh

ENTRYPOINT ["/usr/sbin/sshd", "-D"]

#EXPOSE 80

#ADD run-xx.sh /run-xx.sh

#RUN chmod -v +x /run-xx.sh

#CMD ["/run-xx.sh"]
