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
	sudo apt -qq update
}


installPHP() {
	# PHP and Modules
	echo -e "\n ${Cyan} Installing PHP and common Modules.. ${Color_Off}"

	# PHP7 (latest)
	sudo pacman -S php php-common libapache2-mod-php php-curl php-dev php-gd php-gettext php-imagick php-intl php-mbstring php-mysql php-pear php-pspell php-recode php-xml php-zip php-cgi php-fpm php-embed php-imap

}


enableMods() {
	# Enable mod_rewrite, required for WordPress permalinks and .htaccess files
	echo -e "\n ${Cyan} Enabling Modules.. ${Color_Off}"

	sudo phpenmod mbstring # PHP7
}

# RUN
update
installPHP
enableMods

echo -e "\n${Green} SUCCESS! ${Color_Off}"
