<!-- tests.php -->
 
<?php
require_once(__DIR__ . '/../config/mysql.php');
require_once(__DIR__ . '/../databaseconnect.php');
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['author']; ?></p>
<?php
}

$sqlQuery2 = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$recipesStatement2 = $mysqlClient->prepare($sqlQuery2);
$recipesStatement2->execute([
'author' => 'mathieu.nebra@exemple.com',
'is_enabled' => true,
]);
$recipes2 = $recipesStatement2->fetchAll();
?>

<?php
echo "Hello, World! This is a \"simple\" PHP application running in a container.<br />";

$userAge = 25;
$fullname = "John Doe\n";
$email = "john.doe@example.com";
echo "\rVotre email est : {$email}<br />";
echo "Votre nom est : {$fullname}<br />";
echo "Vous avez {$userAge} ans.<br />";
echo 'Vous avez ' . $userAge . ' ans.<br />';
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
echo "{$result} <br />";

$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if ($isEnabled === true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅<br />";
}
else {
    echo "Accès refusé ❌ ";
}

$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter === "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter === "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}

$isAllowedToEnterBool = true;

// Si pas autorisé
if (! $isAllowedToEnterBool) {

}

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅<br />';
} else {
    echo 'Accès à la recette interdit ! ❌<br />';
}

// Code 1
$chickenRecipesEnabled = true;

if ($chickenRecipesEnabled) {
    echo '<h1>Liste des recettes à base de poulet</h1>';
}

?>


<?php
// Code 2 : Syntaxe différente
$chickenRecipesEnabled = true;
?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?><!-- Ni le ";" après le endif -->

<?php
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<?php
// Conditions condensées
$userAge = 24;

if ($userAge >= 18) {
    $isAdult = true;
}
else {
    $isAdult = false;
}
// Même code :
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>

<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
    $counter++;
}

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];
?>

<?php
// Test array
$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');

$recipes2[] = 'Cassoulet'; // Créera $recipes[0]
$recipes2[] = 'Couscous'; // Créera $recipes[1]
$recipes2[] = 'Escalope Milanaise'; // Créera $recipes[2]

echo $recipes[1]; // Cela affichera : Couscous
?>

<?php
// Associative array
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];
// OU
$recipe2['title'] = 'Cassoulet';
$recipe2['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe2['author'] = 'john.doe@exemple.com';
$recipe2['enabled'] = true;
echo $recipe2['title']; // Affichera : Cassoulet

echo '<pre>';
print_r($recipe);
echo '</pre>';
?>

<?php
// Boucle foreach
// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0] . '<br />'; // Affichera Cassoulet, puis Couscous
}
?>

<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL . '<br />'; 
}
?>

<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL . '<br />';
}
?>

<?php
// La fonction array_key_exists() permet de vérifier si une clé existe dans un tableau
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !<br />';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !<br />';
}
?>

<?php
// La fonction in_array() permet de vérifier si une valeur existe dans un tableau
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés ! <br />';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés ! <br />';
}
?>

<?php
// La fonction array_search() permet de vérifier si une valeur existe dans un tableau et de connaître sa position
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL .'<br />';

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL .'<br />';
?>

<?php
// Fonction strlen() : permet de connaître la longueur d'une chaîne de caractères
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe .'<br />';

// Fonction str_replace() : permet de remplacer une partie d'une chaîne de caractères par une autre
echo str_replace('c', 'C', 'le cassoulet, c\'est très bon') . '<br />';

// Fonction sprintf() : permet de formater une chaîne de caractères
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
).'<br />';
?>

<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minute . '<br />';

// Ou plus concis :
// Enregistrons les informations de date dans des variables
$date = date('d/m/Y');
$time = date('H \h i');

// Maintenant on peut afficher ce qu'on a recueilli
echo "Bonjour ! Nous sommes le {$date} et il est {$time}".'<br />';
?>

<?php
require_once(__DIR__ . '/../functions.php');
// 2 exemples
$romanSalad = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true,
];

$sushis = [
    'title' => 'Sushis',
    'recipe' => 'Etape 1 : du saumon ; Etape 2 : du riz',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => false,
];

// Répond true !
$isRomandSaladValid = isValidRecipe($romanSalad);

// Répond false !
$isSushisValid = isValidRecipe($sushis);
?>
