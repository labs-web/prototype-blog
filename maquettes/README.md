# Maquettage de Prototype Blog


## Tâche à faire 

voir dans /backlog

## Installation de maquette


- Clonnage avec les modules 

````bash
git clone <URL-du-depot>
````

- Installer les Dépendances
  
```bash
  cd maquettes
  npm install
```

- Exécuter le Serveur Intégré PHP
  
```bash
php -S  localhost:8000  -d display_errors=On
```


## Icone 

-[https://fontawesome.com/v5/search?o=r&m=free](https://fontawesome.com/v5/search?o=r&m=free)

- prompt 
  - fontawesome v5, proposer icone pour : Gestion de projet


## Règle 

- CSS et JS
  - Chaque module peut avoir sont propore fichier CSS e JS
  - On peut pas importer des bibliothèque dans un module 
    - Il doit être importer globalement et sans sans CDN

- Vérification 
  - Recherche sur Vs code 
    - <link
    - <link rel
    - <script src
