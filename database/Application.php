<?php

require_once "./database/Connect.php";

session_start();

class Application extends Connect {

    private $error_valid = false;
    private $error_valid_text = [];
    public function create($car_number, $description){
        $this->validate($car_number, $description);
        if(!$this->error_valid){
            $id = $_SESSION['id_user'];
            $query = "INSERT INTO application (car_number, description, id_user) VALUES ('$car_number','$description',$id)";
            $result =  mysqli_query($this->connection, $query);
            return $result;
        }
        return[
            "error_valid" => $this->error_valid, 
            "error_valid_text" => $this->error_valid_text
        ];
    }

    private function validate($car_number, $description){
        $this->checkEmpty($car_number, 'car_number', 'Введите гос. номер авто');
        $this->checkEmpty($description, 'description', 'Введите описание нарушения');
    }


    private function checkEmpty($value, $field, $message) {
        if (empty($value)) {
            $this->error_valid = true;
            $this->error_valid_text[$field] = $message;
        }
    }
}
?>