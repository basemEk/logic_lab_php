#!/usr/bin/env bash

if [[ -f /etc/lsb-release ]];then
    source ./install-debian.sh
  elif [[ "$OSTYPE" == "darwin"* ]]; then
    echo "Mac";
  elif [[ -f "/etc/arch-release" ]]; then
    echo "Arch";
    source ./install-arch.sh
  else
    echo "Google is your friend";

fi
