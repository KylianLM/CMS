<?php
namespace App;

use App\Model\Repository;
class App
{
    /**
     * @TODO Call database connection
     * @TODO Load Router
     */
    
    public function __construct()
    {
        require_once __DIR__ . '/../config/config.php';
        $db = new Repository();
    }
}