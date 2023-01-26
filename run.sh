#!/bin/bash

USER=$(whoami);
UID=$(id -u);
GID=$(id -g);

export USER && export UID && export GID
docker-compose up -d --build