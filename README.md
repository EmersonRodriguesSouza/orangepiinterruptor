# Phopi com versão Português Brasil 
## Versión 1.1.0.0
## App Web para controle de portas Gpio, Phopi (Php Orange Pi).


Aplicação ainda esta em desenvolvimento

### Implementações.

Gpio, bibliotecas de controle de porta WiringOP.
Linguagem de aplicativo de back end, Php.
Ajax para Php, Xajax.
Biblioteca JavaScript, JQuery.
Projeto final inicial, Bootstrap.

### Descrição.

O aplicativo da web Phopi (PHP Orange Pi) é um aplicativo escrito em PHP, baseado em Xajax 0.5,
(para comunicação com o servidor) Bootstrap 3.3.6 e JQuery 2.2.3 (para controlar a GPIO pelo
o aplicativo), rodando em um dispositivo Orange Pi PC, onde temos um servidor implantado
LAMP (Ubuntu Mate 15.04.1, Apache 2.4.10, MySQL 5.6.28 e PHP 5.6.4). Através do aplicativo
controlamos quatro interruptores com Módulo Relé 5V conectados às portas GPIO 22, 23, 24, 25
do OpiPC.

### Dependencias.

WiringPi for OrangePi. We call it WiringOP. Test fo Orangepi PC:
> [WiringOP] (https://github.com/zhaolei/WiringOP.git)

Lenguaje de programación entorno servidor, back end, PHP:
> [PHP] (http://php.net)

Ajax para PHP:
> [Xajax] (http://www.xajax-project.org)

Librería de JavaScript JQuery:
> [JQuery] (https://jquery.com)

Framework Bootstrap:
> [Bootstrap] (http://getbootstrap.com)

### Configuração e Instalação.

#### Instalando  os pacotes necessários

> apt-get install git

> apt-get install make

> apt-get install gcc

#### clonamos o repositório, acessamos, aplicamos permissões de execução e compilamos.

> git clone https://github.com/zhaolei/WiringOP.git -b h3

> cd WiringOP

> chmod +x ./build

> sudo ./build

#### Comandos para gerenciar o Gpio

> gpio mode 22 out // Establecemos el modo.

> gpio write 22 1 // Activamos el Gpio 22.

> gpio write 22 0 // Desactivamos el Gpio 22.

> gpio read 22 // Leemos el estado del Gpio 22.

#### Damos permissões ao usuário Apache, permissões de "root"

> nano /etc/sudoers

> www-data ALL=(ALL) NOPASSWD: ALL // Escribimos esta línea al final del archivo.

#### Configurando a Rede

> apt-get remove network-manager // Desinstalamos el paquete network-manager.

#### Editamos /etc/network/interfaces

> nano /etc/network/interfaces

```
######################################################################
# /etc/network/interfaces -- configuration file for ifup(8), ifdown(8)
#
# A "#" character in the very first column makes the rest of the line
# be ignored. Blank lines are ignored. Lines may be indented freely.
# A "\" character at the very end of the line indicates the next line
# should be treated as a continuation of the current one.
#
# The "pre-up", "up", "down" and "post-down" options are valid for all
# interfaces, and may be specified multiple times. All other options
# may only be specified once.
#
# See the interfaces(5) manpage for information on what options are
# available.
######################################################################

# Loopback interface.

auto lo
iface lo inet loopback

# Red eth0

auto eth0
iface eth0 inet static
    address 192.168.1.250
	network 192.168.1.0
    netmask 255.255.255.0
    broadcast 192.168.1.255
    gateway 192.168.1.1
```

#### Editamos /etc/resolv.conf

> nano /etc/resolv.conf

```
domain home.lan
	
nameserver 8.8.8.8
nameserver 8.8.4.4
```

#### Editamos /etc/hosts

> nano /etc/hosts

```
127.0.0.1		localhost
192.168.1.250	server.home.lan		server
```

#### Editamos /etc/hostname

> nano /etc/hostname

#### Configuramos o servidor ProFtpd

> apt-get install proftpd

> ftpasswd --passwd --name=orangepi --file=/etc/proftpd/passwd --uid=115 --home=/home/orangepi --shell=/bin/false



### Video.

Vídeo Públicado por (https://github.com/antoniohh) , mesmo projetista do código.

<a href="http://www.youtube.com/watch?feature=player_embedded&v=KIevMkiSBx4" target="_blank"><img src="http://img.youtube.com/vi/KIevMkiSBx4/0.jpg" alt="App Web para el control de puertos Gpio, Phopi (Php Orange Pi)." width="1024" border="10" /></a>

[App Web para controlar GPIO do Orange Pi, Phopi (Php Orange Pi).] (https://youtu.be/KIevMkiSBx4)

### Licencia.

**GNU GENERAL PUBLIC LICENSE** 
