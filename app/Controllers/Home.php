<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        $data = [
            "pantryData" => [["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"],["Name" => "Chips", "ExpDate" => "01/09/1980", "Opened" => "Yes"], ["Name" => "Orange", "ExpDate" => "04/21/1980", "Opened" => "No"]]
        ];

        echo view("templates/header.php");
        echo view("index.php", $data);
        echo view("Modals/add.php");
        echo view("templates/footer.php");
    }

    private function retriveList() {

    }
}
