rm ./src/Entity/*.php
php bin/console doctrine:mapping:convert --namespace='App\Entity\' --from-database annotation ./src/Entity/
php bin/console doctrine:generate:entities App\/Entity
mv ./src/Entity/App/Entity/*.php ./src/Entity
rm -r ./src/Entity/App
