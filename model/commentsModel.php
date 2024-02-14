<?php

// Chargement de tous les commentaires
function getComments(PDO $db): array
{
    $sql = "SELECT * FROM comments ORDER BY date_heure ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

// Insertion d'un commentaire
function addComments(PDO $db, string $nom, string $courriel, string $titre, string $texte): bool|string
{
    /*
     * On récupère les données en assurant leur sécurité
     *
     * On utilise la fonction htmlspecialchars pour convertir les caractères spéciaux en entités HTML
     * Le paramètre ENT_QUOTES permet de convertir les guillemets doubles et simples
     * On utilise la fonction strip_tags pour supprimer les balises HTML et PHP
     * On utilise la fonction trim pour supprimer les espaces en début et fin de chaîne
     */

    $nom = htmlspecialchars(strip_tags(trim($nom)), ENT_QUOTES);
    // false si le courriel n'est pas valide, sinon on le garde
    $courriel = filter_var($courriel, FILTER_VALIDATE_EMAIL);
    $titre = htmlspecialchars(strip_tags($titre), ENT_QUOTES);
    $texte = htmlspecialchars(strip_tags(trim($texte)), ENT_QUOTES);

    // si les données ne sont pas valides, on envoie false
    if (empty($nom) || $courriel === false || empty($titre) || empty($texte)) {
        return false;
    }
    // on prépare la requête
    $sql = "INSERT INTO comments (nom, courriel, titre, texte) VALUES ('$nom', '$courriel', '$titre', '$texte')";
    try {
        // on exécute la requête
        $db->exec($sql);
        // si tout s'est bien passé, on renvoie true
        return true;
    } catch (Exception $e) {
        // sinon, on renvoie le message d'erreur
        return $e->getMessage();
    }

}