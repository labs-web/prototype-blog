<?php
session_start();

// Configuration (à remplacer par vos propres valeurs)
include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; 

// Validation des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le rôle et le nettoyer
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);

    // Vérifier si le rôle est valide (à remplacer par votre logique de validation)
    $valid_roles = ['formateur', 'apprenant', 'responsable'];
    if (in_array($role, $valid_roles)) {
        $_SESSION['role'] = $role;
        header('Location: /modules/shared/dashboard.php'); // Rediriger vers le tableau de bord
        exit();
    } else {
        $_SESSION['error'] = 'Rôle invalide.';
        header('Location: /modules/shared/login.php');
        exit();
    }
}