<?php
    require_once 'DAL.php';
    class BL {
            function Get_all_phones() {
            $phones = new DAL();
            $results = $phones->executeStatement('SELECT * FROM cellular.phone');
            $phonesArray = [];
            foreach ($results as $row)
            {
                array_push($phonesArray, new PhoneModel());
                echo $row['id_phone'] . $row['model'] . "\n";
            }

            return $phonesArray;
        }
    }
?>