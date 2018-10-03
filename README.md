# sf4 angular6 in docker : e-commerce apps !


# get project from remote
git clone https://github.com/spidrotech/sf4_docker.git

# download & install composer: https://getcomposer.org/download/ OR curl -s http://getcomposer.org/installer | php

# install project
composer install

# download & install docker : https://docs.docker.com/install/ 

# install containers : (if doesn't work use 'sudo' !)
docker_compose buid

# configure docker env : 
docker-compose up -d

# launch in browser (TODO: if no traefik installed) :
php bin/console server:run


# git experience
git checkout -b [name_of_your_new_branch]

git checkout [name_of_your_new_branch]

git add [changed_file_name]

git commit -m '[commit_infos]'

git merge --no-ff origin/master

git push origin [name_of_your_new_branch]


###############################################################
################### ANGULAR CLI	###############################
###############################################################

# Download & install nodeJs : https://nodejs.org/en/download/ 

# anstall angular cli :
npm install -g @angular/cli
npm list -g --depth=0

# get in frontend directory
cd frontend

# install libs:
npm install

# run angular with (-o) option to automatically open browser on http://localhost:4200/
ng serve --open

# Finally, put any issues encoutred in : https://github.com/spidrotech/sf4_docker/issues 

# Enjoy !


Idea comes from websites example : 
https://remixjobs.com/ 
https://www.lesjeudis.com/
https://www.monster.fr/
https://www.chooseyourboss.com/
https://www.freelance-info.fr/

# Technologies : PHP7, Symfony4, angular6, jQuery3.3, bootstrap4, varnish cache, git, docker, rest api
# Environment : Docker, portainer, git, Trello
