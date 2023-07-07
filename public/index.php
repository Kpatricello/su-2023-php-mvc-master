<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Initialisation de certaines choses
use App\model\UploadModel;
use App\Controller\ContactController;
use App\Controller\IndexController;
use App\Controller\UploadController;
use App\Routing\RouteNotFoundException;
use App\Routing\Router;
use Symfony\Component\Dotenv\Dotenv;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/../.env');

// DB
[
  'DB_HOST'     => $host,
  'DB_PORT'     => $port,
  'DB_NAME'     => $dbname,
  'DB_CHARSET'  => $charset,
  'DB_USER'     => $user,
  'DB_PASSWORD' => $password
] = $_ENV;

$dsn = "mysql:dbname=$dbname;host=$host:$port;charset=$charset";

try {
  $pdo = new PDO($dsn, $user, $password);
  var_dump($pdo);
} catch (PDOException $ex) {
  echo "Erreur lors de la connexion à la base de données : " . $ex->getMessage();
  exit;
}

// Twig
$loader = new FilesystemLoader(__DIR__ . '/../templates/');
$twig = new Environment($loader, [
  'debug' => $_ENV['APP_ENV'] === 'dev',
  'cache' => __DIR__ . '/../var/twig/',
]);

$model = new UploadModel();
//$uploadcontroller = new UploadController($model);

// Appeler un routeur pour lui transférer la requête
$router = new Router([
  Environment::class => $twig,
  PDO::class => $pdo, UploadModel::class => $model
]);
$router->addRoute(
  'homepage',
  '/',
  'GET',
  IndexController::class,
  'home'
);
$router->addRoute(
  'contact_page',
  '/contact',
  'GET',
  ContactController::class,
  'contact'
);
$router->addRoute(
  'upload_page', // nom du router
  '/upload', // url path condition
  'POST', // method condition
  UploadController::class, // controller classe appeler (reponse)
  'FileUpload' // la fonction appeler dans le controller (reponse)
);

try {
  $router->execute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
} catch (RouteNotFoundException $ex) {
  http_response_code(404);
  echo "Page not found";
}
