<?php

function getData($conn, $steden)
{
    $result = $conn->query($steden);
    $data =[];
    $counter = 0;
    while ($row = $result->fetch_assoc())
    {
        $data[$counter] = $row;
        $counter++;
    }
    return $data;
}
?>