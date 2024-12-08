---
chapitre: false
package: pkg_global
order: 45
---

## Packages à intégrer


### **3. Packages pour la recherche**

#### **3.1. Laravel Scout**
- **Description** : Fournit une recherche pleine-textuelle intégrée.  
- **Installation** :
  ```bash
  composer require laravel/scout
  ```
- **Configuration** :
  - Publiez les fichiers de configuration :
    ```bash
    php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
    ```



### **4. Packages pour la gestion des médias**

#### **4.1. Spatie Media Library**
- **Description** : Permet de gérer facilement les fichiers et les images associés à des modèles.  
- **Installation** :
  ```bash
  composer require spatie/laravel-medialibrary
  ```
- **Configuration** :
  - Publiez les fichiers de configuration :
    ```bash
    php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider"
    ```
  - Exécutez les migrations :
    ```bash
    php artisan migrate
    ```





### **5. Packages pour les logs et le débogage**

#### **5.1. Laravel Debugbar**
- **Description** : Fournit une barre de débogage pour visualiser les requêtes SQL, la mémoire utilisée, etc.  
- **Installation** :
  ```bash
  composer require barryvdh/laravel-debugbar --dev
  ```

#### **5.2. Laravel Telescope**
- **Description** : Outil de surveillance pour déboguer les requêtes, les événements, les tâches en file d'attente, etc.  
- **Installation** :
  ```bash
  composer require laravel/telescope
  php artisan telescope:install
  php artisan migrate
  ```



### **6. Packages pour la gestion des données**

#### **6.1. FakerPHP**
- **Description** : Génère des données fictives pour les tests et le prototypage.  
- **Installation** :
  ```bash
  composer require fakerphp/faker
  ```




### **7. Installation des dépendances Frontend**

#### **7.1. Tailwind CSS**
- **Description** : Framework CSS utilitaire pour concevoir rapidement des interfaces.  
- **Installation** :
  ```bash
  npm install tailwindcss
  npx tailwindcss init
  ```
- Configurez `tailwind.config.js` pour inclure les fichiers Blade :
  ```javascript
  module.exports = {
    content: ['./resources/views/**/*.blade.php', './resources/js/**/*.js'],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  ```
- Compilez les fichiers CSS :
  ```bash
  npm run dev
  ```

#### **7.2. Vue.js (optionnel)**
- **Description** : Utilisé pour les fonctionnalités frontend réactives.  
- **Installation** :
  ```bash
  npm install vue
  npm install vue-loader vue-template-compiler --save-dev
  ```


