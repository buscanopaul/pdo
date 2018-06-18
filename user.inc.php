<?php

class User extends dbh {


    public function getAllUsers() {
       $stmt = $this->connect()->query("SELECT * FROM dboop.user");
       while($row = $stmt->fetch()) {
            $id = $row['id'];
            return $id;
       }

    }

}

?>