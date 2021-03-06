#!/bin/bash


./vendor/bin/drush cr
./vendor/bin/drush  tome:export -y
./vendor/bin/drush tome:static --uri=https://sandervancamp.github.io

cp -R web/sites/default/files docs/sites/default/

touch docs/CNAME
echo "sandervancamp.be" >> docs/CNAME

while getopts p option
do
  case $option in
    p) opt_p=TRUE ;;
  esac
done


echo -e "\033[0;32mDeploying updates to GitHub...\033[0m"

# Generate the pages.
find public ! -name ".*" -delete

# Go to the submodule directory.
cd public

# Commit changes.
date="`date`"
git add -A
git commit -m "Rebuild the site on $date"

# Push to origin.
git push origin master

# Back to the original directory.
cd ..

# Commit and push the submodule SHA
git add public
git commit -m "Update the submodule SHA on 'public' directory on $date"
git push origin master

