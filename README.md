# Curso Temas de Bioinfo

## instalação no linux
```
$ sudo apt install apache php libapache2-mod-php
$ cd /var/www/html
$ sudo nano info.php
$ sudo mkdir appbioinfo
$ sudo chown felipe.www-data appbioinfo
$ sudo chmod 775 appbioinfo
$ cd appbioinfo
$ nano README.md
```

## instalação de softwares bioinfo
```
$ sudo apt install mafft
```

## instalação de IDE
Buscar no google Visual Studio Code
Achar Pinguim
Baixar .deb
```
$ cd Downloads
$ sudo apt install ./<nome_do_arquivo>
```


##COMO MUDAR CONFIG DO PHP
sudo nano /etc/php/7.4/apache2/php.ini
upload_max_filesize
systemctl reload apache2.service


##instalando splitstree
http://www.splitstree.org/
clicar em Download
versão pra Linux (Unix)
```
$ chmod +x ./splitstree4_unix_4_16_1.sh
$ ./splitstree4_unix_4_16_1.sh
```

##instalando JAVA
```
$ sudo apt install default-jre
```
 

##instalando gerenciador de versões
```
$ sudo apt install git
$ git config --global "user.name" flpsw
$ git config --global "user.email" felipe@flpsw.com.br
``` 



