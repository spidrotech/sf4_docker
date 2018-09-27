# sf4 angular6 in docker : e-commerce apps !

# download & install composer: https://getcomposer.org/download/ OR curl -s http://getcomposer.org/installer | php

# install project
composer install

# download & install docker : https://docs.docker.com/install/ 

# run the application : 
docker-compose up -d

# launch in browser (TODO: if no traefik installed) :
php bin/console server:run


###############################################################
#     _                      _                 ____ _     ___
#    / \   _ __   __ _ _   _| | __ _ _ __     / ___| |   |_ _|
#   / △ \ | '_ \ / _` | | | | |/ _` | '__|   | |   | |    | |
#  / ___ \| | | | (_| | |_| | | (_| | |      | |___| |___ | |
# /_/   \_\_| |_|\__, |\__,_|_|\__,_|_|       \____|_____|___|
#                |___/
###############################################################

# get in frontend directory
cd frontend

# start angular with (-o) option to automatically open browser on http://localhost:4200/
ng serve --open

# Enjoy !



Idea comes from websites example : 
https://remixjobs.com/ 
https://www.lesjeudis.com/
https://www.monster.fr/
https://www.chooseyourboss.com/
https://www.freelance-info.fr/

# Technologies : PHP7, Symfony4, angular6, jQuery3.3, bootstrap4, rest api
# Environment : Docker, traefik, portainer, git, Trello