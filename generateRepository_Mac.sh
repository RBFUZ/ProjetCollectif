
sed -i '.bak' '/@ORM\\Entity/a\
 * (repositoryClass="App\\Repository\\'$1'Repository")
' ./src/Entity/$1.php

 rm ./src/Entity/$1.php.bak
 vendor/bin/doctrine orm:generate-repositories src/Repository/
 mv ./src/Repository/App/Repository/*.php ./src/Repository
 rm -r ./src/Repository/App
