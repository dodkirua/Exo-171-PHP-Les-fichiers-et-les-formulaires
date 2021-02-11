<?php

/**
 * 1. Créez un formulaire classique contenant un champs input de type file
 * 2. Faites pointer l'action sur la page fichier.php ( que vous créerez )
 * 3. Gérez l'upload du fichier, le fichier doit être stocké dans le répertoire upload de votre site
 * 4. Gérez tous les cas de figure:
 *    - Le fichier doit être une image
 *    - On ne peut pas uploader de fichier image de plus de 3Mo
 *    - Les fichiers doivent être renommés
 *    - Affichez les erreurs sur la page index.php s'il y en a ( fichier non présent, erreur d'upload, etc... )
 * ( BONUS )
 * 5. Une fois l'upload terminé, enregistrez le nom du fichier uploadé dans le fichier file.json ( que vous créerez s'il n'existe pas )
 *    Attention, trouvez une solution pour que le fichier contienne du JSON valide !
 * 6. Affichez sur la page index les fichiers ayant déjà été uploadés.
 */
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo171</title>
</head>
<body>
<?php
if (isset($_GET['e'])){
    switch ($_GET['e']) {
        case  "1":
            echo "<p class='error'>Erreur lors de l'envoie</p>";
            break;
        case "2":
            echo "<p class='error'>Fichier autorisé sont les jpeg</p>";
            break;
        case "3":
            echo "<p class='error'>Fichier trop volumineux max 3 Mo</p>";
            break;
    }
}
?>

<form action="fichier.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="file">Votre fichier</label>
            <input type="file" name="fichierUtilisateur" id="file">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>