Si vous souhaitez utiliser une police Google sans connexion Internet, vous pouvez télécharger la police et l'intégrer directement dans votre projet. Voici les étapes :

### 1. Téléchargez la police Google
1. **Accédez à Google Fonts** : [https://fonts.google.com](https://fonts.google.com).
2. **Choisissez une police** : Sélectionnez la police souhaitée.
3. **Téléchargez la famille de polices** : Cliquez sur le bouton « Download Family » pour télécharger un fichier ZIP contenant les fichiers de la police.

### 2. Intégrez la police dans votre projet
1. **Décompressez le fichier ZIP** : Vous obtiendrez des fichiers `.ttf` ou `.otf`.
2. **Placez les fichiers de police** : Copiez les fichiers `.ttf` ou `.otf` dans un dossier de votre projet, par exemple dans un dossier nommé `fonts`.

### 3. Utilisez la police dans votre CSS
1. **Déclarez la police avec `@font-face` dans votre fichier CSS** :
   ```css
   @font-face {
       font-family: 'Roboto';
       src: url('./fonts/Roboto-Regular.ttf') format('truetype');
       font-weight: normal;
       font-style: normal;
   }

   @font-face {
       font-family: 'Roboto';
       src: url('./fonts/Roboto-Bold.ttf') format('truetype');
       font-weight: bold;
       font-style: normal;
   }
   ```

   *Assurez-vous que le chemin (`./fonts/Roboto-Regular.ttf`) correspond à l'emplacement où vous avez stocké les fichiers de police dans votre projet.*

2. **Appliquez la police dans votre CSS** :
   ```css
   body {
       font-family: 'Roboto', sans-serif;
   }
   ```

### 4. Testez en mode hors ligne
Une fois ces étapes terminées, votre police sera intégrée dans le projet et utilisable sans connexion Internet.