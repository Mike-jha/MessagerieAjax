<?php 
/**
 * Connexion à la base de données
 * @return Object PDO
 */
function dbConnect()
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    return new PDO('sqlite:'. __DIR__.'/../data/db/data.db', null, null, $attributes);
}

/**
 * Fonction de connexion d'utilisateur
 * @param Objet PDO $pdo
 * @param Array $post
 * 
 * @return Array Résultat
 */
function login($pdo, $post) {
    
}

/**
 * Fonction d'enregistrement d'utilisateur
 * @param Objet PDO $pdo
 * @param Array $post
 * @param Array $files
 * 
 * @return Array Résultat
 */
function register($pdo, $post, $files)
{
}

function checkUser($pdo, $post)
{

}

/**
 * Retourne l'utilisateur connecté
 * @return Array or false
 */
function getUser() {
    
}

/**
 * Crée un token pour la sécurité CSRF
 * @return string token
 */
function generateToken()
{

}

/**
 * Test si un token est valide
 * @return bool
 */
function isTokenValid($token)
{
}

/**
 * Retourne les derniers messages
 * @param Object $pdo 
 * @param int $count default 5
 * @return array
 */
function getMessages($pdo, $count = 5) {
    
}

/**
 * Retourne les dernier message à partir d'un id
 * @param Object $pdo 
 * @param int $lastId 
 * @return array
 */
function getLastMessages($pdo, $lastId) {
    
}

/**
 * Poste un nouveau message
 * @param Object $pdo 
 * @param Object User $user
 * @param string $message
 * @return array
 */
function postMessage($pdo, $user, $message) {
    
}