<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

require ROOT . 'vendor/autoload.php';

class App {
    protected $routes;

    public function __construct(){
        $dotenv = Dotenv\Dotenv::create(ROOT);
        $dotenv->load();
    }

    public function addRoute($path, $file){

        $this->routes[$path] = $file;
    }

    public function route(){

        $path = parse_url($_SERVER['REQUEST_URI'])['path'];
        if(('/' !== $path) && substr($path, -1) == '/') {
            $path = substr($path, 0, -1);
        }

        if(!isset($this->routes[$path])){
            http_response_code(404);
            die;
        }

        $route = $this->routes[$path];

        if(is_callable($route)){
            call_user_func($route);
            die;
        };

        include_once  ROOT . $this->routes[$path];
    }

    public function redirect($url){
        $base = getenv('BASE_URL');
        header("Location: {$base}/{$url}");
        exit;
    }
}

$app = new App();
$app->addRoute('/', 'index.php');
$app->addRoute('/en', 'en/index.php');
$app->addRoute('/menu', 'pages/menu.php');
$app->addRoute('/ru', 'ru/index.php');
$app->addRoute('/send', 'send.php');
$app->addRoute('/poster', 'poster.php');
$app->addRoute('/ua', function() use ($app){
    $app->redirect('');
});


$app->route();


function dd($data){
    var_dump($data);
    die;
}

function config($key){

    return getenv($key);
}