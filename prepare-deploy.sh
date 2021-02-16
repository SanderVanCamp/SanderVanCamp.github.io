#!/bin/bash
./vendor/bin/drush cr
./vendor/bin/drush  tome:export -y
./vendor/bin/drush tome:static --uri=https://sandervancamp.github.io

cp -R web/sites/default/files .deploy/

touch docs/CNAME
echo "sandervancamp.be" >> docs/CNAME
