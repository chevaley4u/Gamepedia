<?php
declare(strict_types=1);
namespace Mygamepedia;

session_start();
require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Illuminate\Database\Capsule\Manager as DB;
use \Slim\Container;
use \Slim\App;

use Mygamepedia\controllers\TD1;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();


TD1::q1();
TD1::q2();

