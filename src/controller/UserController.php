<?php
namespace App\controller;

use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use App\core\BaseController;
use App\models\user;



class UserController extends BaseController
{
    private PDO $db;

    public function __construct()
    {
        $this->db = new PDO("sqlite::memory:");
    }


public function dashboard()
{
    $userModel = new User();
    $all = $userModel->loadAll();

    echo "<pre>";
    print_r($all);
    echo "</pre>";

    foreach ($all as $user) {
        echo "I'm " . $user['username'] . "<br>";
    }
}
    public function index()
{
    $userModel = new User();
    echo $this->render('create_user', [
        'all' => $userModel->loadAll()
    ]);
    
    
}
public function test(){
    echo $this->render('test', [
        'test' => "test 2"
    ]);
}

}