 # Copy env file and add your own database and mail credentials
 cp .env.example .env

 # Install dependency
 composer install

 # Generate app key
 php artisan key:generate
 
 # Migrate database
 php artisan migrate

 # Create encryption keys
 php artisan passport:install

 # Install dependency with NPM
 npm install

 # Develop
 npm run dev # or npm run watch

 # Build on production
 npm run production
 
 # Serving application
 php artisan serve

 # Fonctionement

 Commencer par vous inscrire et remplissez tous les champs, ensuite vous pouvez aller dans le dashboard.

 Sur le Dashboard vous pouvez aller modifier toutes vos informations et aussi aller sur une liste de tous les inscrits.

 Je n'ai pas réussi à récupérer les utilisateurs pour pouvoir modifier/supprimer la bonne personne à partir de la liste. En Php (Vanilla, Symphony)/JS(React/Vanilla) on peut facilement passer des données ici c'est pas faute de chercher je n'y arrive pas.

 En tout cas je tiens à vous remercier j'avais pas eu l'occasion de faire du Laravel depuis plus d'un an.