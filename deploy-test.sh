#!/bin/bash
GIT_REPO_URL=$(git config --get remote.origin.url)

./vendor/bin/drush cr
./vendor/bin/drush  tome:export -y
./vendor/bin/drush tome:static --uri=https://sandervancamp.github.io

cp -R web/sites/default/files .deploy/

cd .deploy

touch CNAME
echo "sandervancamp.be" >> CNAME

git add .
git commit -am "Static site deploy"
git push github gh-pages --force

