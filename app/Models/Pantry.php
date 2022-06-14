<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class Pantry extends Model {
        //Vars for the database connection, query builder, and table
        protected $table = "item";
        protected $primarykey = "Item_ID";
        protected $returntype = "array";
        

       public function get_all() {
           $db = \Config\Database::connect(); 

           $builder = $db -> table('item');

            $results = $builder -> get();

            return $results -> getResultArray();
       }


       public function getItemByID($id) {
            $db = \Config\Database::connect(); 

            $builder = $db -> table('item');

            $builder -> where("Item_ID", $id);
         
            $results = $builder -> get();

            return $results -> getResultArray();
        }



       public function add($arr) {
        $db = \Config\Database::connect(); 

        $builder = $db -> table('item');

        //All of the column data being bound before the insertion is to take place
        $data = [
            'Name' => $arr['Name'] ,
            'IsOpen' => $arr['IsOpen'] ,
            'ExpDate' => $arr['ExpDate'],
        ];

        //Goes ahead and adds the piece to the database
        $builder -> insert($data);
       }



       public function deleteItem($id) {
            $db = \Config\Database::connect();

            $builder = $db -> table('item');

            $builder -> delete(["Item_ID" => $id]);
       }


       public function updateItem($arr, $id) {
            $db = \Config\Database::connect();

            $builder = $db -> table('item');

            $builder -> where("Item_ID", $id);
            
            $builder -> update($arr);
       }
    }

?>