<?php

    namespace App\Controllers;

    use App\Models\Pantry;
    use App\Controllers\Home;

    class ItemActions extends BaseController {
        public function deleteItem($id) {
            $model = new Pantry();

            $model -> deleteItem($id);

            $temp = new Home();

            $temp -> index();
        }


        /**
         * Opens the update modal to update the item
         */
        public function openUpdate($id) {
            //Initlizes a new model instance
		    $model = new Pantry();

		    //Gets the piece by the id passed into the method
		    $temp = $model -> getItemByID($id);

            foreach ($temp[0] as $key => $value):
                switch($key){
                    case 'Name':
                        $temp['productName'] = esc($value);
                        break;
                    case 'IsOpen':
                        $temp['IsOpen'] = esc($value);
                        break;
                    case 'Item_ID':
                        $temp['id'] = esc($value);
                        break;
                    default:
                       $temp['experationDate']  = esc($value);
                       break;
                }
            endforeach;

		    //Sets temp to be the first (position 0) piece, since there will only be one piece that is returned in the array
		    // $temp = $temp[0];

		    //Sets up the title and the data that will be sent to the views
		    $data = [
                "pantryData" => $model -> get_all(),
			    "form" => $temp,
                "id" => $id,
		    ];
    
            echo view("templates/header.php");
            echo view("index.php", $data);
            echo view("Modals/edit.php", $data);
            echo view("Modals/add.php");
            echo view("templates/footer.php");

            echo '<script>document.getElementById("editModal").style.display = "block"</script>';
        }



        public function updateItem($id) {

            if (!isset($_POST['form'])) {
                $data = [
                    "pantryData" => $model -> get_all(),
                ];
        
                echo view("templates/header.php");
                echo view("index.php", $data);
                echo view("Modals/add.php");
                echo view("templates/footer.php"); 
            }

            $temp = [];

            foreach($_POST['form'] as $key => $value) :
                
                switch($key) {
                    case "productName":
                        $temp['Name'] = esc($value);
                        break;
                    case "experationDate":
                        $temp['ExpDate'] = esc($value);
                        break;
                    default:
                        switch(esc($value)) {
                            case "true":
                                $temp['IsOpen'] = 1;
                                break;
                            case "false":
                                $temp['IsOpen'] = 0;
                                break;
                        }
                        break;
                }

            endforeach;

            $model = new Pantry();

            $model -> updateItem($temp, $id);


            
            $data = [
                "pantryData" => $model -> get_all(),
            ];
    
            echo view("templates/header.php");
            echo view("index.php", $data);
            echo view("Modals/add.php");
            echo view("templates/footer.php");
            
        }




        function addItem() {
            if (!isset($_POST['form'])) {
                $data = [
                    "pantryData" => $model -> get_all(),
                ];
        
                echo view("templates/header.php");
                echo view("index.php", $data);
                echo view("Modals/add.php");
                echo view("templates/footer.php"); 
            }

            $model = new Pantry();

            //Array to hold form data
		    $temp = [];

		    //Cleanse all of the form data and put in temp[]
		    foreach($_POST['form'] as $key => $value) {
                //Change Key names
			    switch($key) {
                    case 'productName':
                        $temp['Name'] = esc($value);
                        break;
                    case "productOpen":
                        switch(esc($value)) {
                            case "true":
                                $temp['IsOpen'] = 1;
                                break;
                            case "false":
                                $temp['IsOpen'] = 0;
                                break;
                        }
                        break;
                    default:
                        $temp['ExpDate'] = esc($value);
                        break;
                }
		    }

		    //Calls the function in the model with the already cleansed input
		    $model -> add($temp);


            $data = [
                "pantryData" => $model -> get_all(),
            ];
    
            echo view("templates/header.php");
            echo view("index.php", $data);
            echo view("Modals/add.php");
            echo view("templates/footer.php");
        }
    }
?>