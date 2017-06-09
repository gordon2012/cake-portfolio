date

rm -rf .gitignore
rm -rf .git
rm -rf config/app.php

git init

git config user.name "Travis CI"
git config user.email "gordon2012@users.noreply.github.com"

git add .
git commit -m "Deploy to server"

git push --force --quiet "https://${GH_TOKEN}@${GH_REF}" master:deploy > /dev/null 2>&1
