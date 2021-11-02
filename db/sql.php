<?php
    include('./connection.php');
    $conn;
    Class Sql {
        function insert() {
            for ($i=1; $i <= 100 ; $i++) { 
                $url      = "https://www.easports.com/fifa/ultimate-team/api/fut/item?page=".$i;
                $data = json_decode( file_get_contents($url), true );
        
                foreach ($data['items'] as $obj) {
                    $name       = $obj['firstName'];
                    $position   = $obj['position'];
                    $team       = $obj['club']['name'];
                    $nation     = $obj['nation']['name'];
                            
                    $query = "INSERT INTO players(name, position, nation, team) VALUES ('$name', '$position', '$team', '$nation')";
                    mysqli_query($this->conn, $query);
                }
            }
        }

        function generateJson() {
            $query = "SELECT * FROM players";
            $result = $this->conn->query($query);

            echo $result;
            
        }
    }
?>