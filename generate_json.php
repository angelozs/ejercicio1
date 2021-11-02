<?php
include('db/connection.php');

$team;
if(isset($_POST['team'])){
    $team = $_POST['team'];
}

$query = "SELECT * FROM players WHERE team LIKE '$team%'";
$total_players = $result->num_rows;
$query = "SELECT * FROM players WHERE team LIKE '$team%' LIMIT 0, 10";
$query_count = "SELECT COUNT(*) AS total_players FROM players WHERE team LIKE '$team%'";
$total_pages = ceil($total_players / 10);
$result = mysqli_query($conn, $query);

// echo json_encode($result->fetch_assoc());
if ($result->num_rows > 0) {
    // output data of each row
    $aa = array();
    while($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $team = $row['team'];

        $aa[] = $row;
    }
} else {
    echo "0 results";
}
$json_string = json_encode(array('players' => $aa));
echo $json_string;