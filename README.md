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

# launch the app :
php bin/console server:run


# git experience
git checkout -b [name_of_your_new_branch]

git checkout [name_of_your_new_branch]

git add [changed_file_name]

git commit -m '[commit_infos]'

git merge --no-ff origin/master

git push origin [name_of_your_new_branch]


# Technologies : PHP7, Symfony4, angular, varnish cache, git, docker, rest api