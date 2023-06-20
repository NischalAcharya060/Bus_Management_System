<?php
header('Content-Type: application/json');
if (isset($_GET['json'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'busmanagement');
    $sqlQuery = "SELECT * FROM tbl_gps WHERE 1";
    $result = mysqli_query($conn,$sqlQuery);
    $arr = array();
    foreach ($result as $row) {
        $arr = array(
            'id' => $row['id'],
            'lat' => $row['lat'],
            'lng' => $row['lng'],
        );
        echo json_encode($arr);
    }
    mysqli_close($conn);
}else{
    echo 'Wrong';
}
?>