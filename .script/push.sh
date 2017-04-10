#!/bin/bash
if [ $TRAVIS_BRANCH == 'master' ] ; then
    git init
        
    git remote add deploy "github@jordanfisher.me:/var/repo/"
    git config user.name "Travis CI"
    git config user.email "info@jordanfisher.me"
    
    git add .
    git commit -m "Deploy"
    git push --force deploy master
else
    echo "Not on master, not deploying"
fi
