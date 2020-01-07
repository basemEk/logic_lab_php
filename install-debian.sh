#!/usr/bin/env bash

# Color Reset
Color_Off='\033[0m'       # Reset

# Regular Colors
Red='\033[0;31m'          # Red
Green='\033[0;32m'        # Green
Yellow='\033[0;33m'       # Yellow
Blue='\033[0;34m'         # Blue
Purple='\033[0;35m'       # Purple
Cyan='\033[0;36m'         # Cyan

update() {
	# Update system repos
	echo -e "\n ${Cyan} Updating package repositories.. ${Color_Off}"
	sudo pacman -Syu
}


installPHP() {
	# PHP and Modules
	echo -e "\n ${Cyan} Installing PHP and common Modules.. ${Color_Off}"

	# PHP5 on Ubuntu 14.04 LTS
	# apt install php5 libapache2-mod-php5 php5-cli php5-common php5-curl php5-dev php5-gd php5-intl php5-mcrypt php5-mysql php5-recode php5-xml php5-pspell php5-ps php5-imagick php-pear php-gettext -y

	# PHP5 on Ubuntu 17.04 Zesty
	# Add repository and update local cache of available packages
	# sudo add-apt-repository ppa:ondrej/php
	# sudo apt update
	# apt install php5.6 libapache2-mod-php5.6 php5.6-cli php5.6-common php-curl php5.6-curl php5.6-dev php5.6-gd php5.6-intl php5.6-mcrypt php5.6-mbstring php5.6-mysql php5.6-recode php5.6-xml php5.6-pspell php5.6-ps php5.6-imagick php-pear php-gettext -y

	# PHP7 (latest)
	sudo apt -qy install php php-common libapache2-mod-php php-curl php-dev php-gd php-gettext php-imagick php-intl php-mbstring php-mysql php-pear php-pspell php-recode php-xml php-zip php-cgi php-fpm php-embed php-imap
}


enableMods() {
	# Enable mod_rewrite, required for WordPress permalinks and .htaccess files
	echo -e "\n ${Cyan} Enabling Modules.. ${Color_Off}"

	# php5enmod mcrypt # PHP5 on Ubuntu 14.04 LTS
	# phpenmod -v 5.6 mcrypt mbstring # PHP5 on Ubuntu 17.04
	sudo phpenmod mbstring # PHP7
}

# RUN
update
installPHP
enableMods

echo -e "\n${Green} SUCCESS! ${Color_Off}"
