# sf4 angular6 in docker : e-commerce apps !


# get project from remote
git clone https://github.com/spidrotech/sf4_docker.git

# download & install composer: https://getcomposer.org/download/ OR curl -s http://getcomposer.org/installer | php

# install project
composer install

# download & install docker : https://docs.docker.com/install/ 

# configure docker env : 
docker-compose up -d

# launch in browser :
localhost:8083


# git experience
git checkout -b [name_of_your_new_branch]

git checkout [name_of_your_new_branch]

git add [changed_file_name]

git commit -m '[commit_infos]'

git merge --no-ff origin/master

git push origin [name_of_your_new_branch]

# Technologies : PHP7, Symfony4, angular, varnish cache, git, docker, rest api
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

# start angular with --open, -o option to automatically open browser on http://localhost:4200/
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
