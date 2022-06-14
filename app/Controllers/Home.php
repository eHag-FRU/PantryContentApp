<?php

namespace App\Controllers;

use App\Models\Pantry;

class Home extends BaseController
{
    public function index() {
        //Sets up a new model
        $model = new Pantry();

        $data = [
            "pantryData" => $model -> get_all(),
        ];

        echo view("templates/header.php");
        echo view("index.php", $data);
        echo view("Modals/add.php");
        echo view("Modals/edit.php");
        echo view("templates/footer.php");
    }
}
