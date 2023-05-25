<?php
function prep_input($data){
    $data = trim($data);
    $data = stripsplashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>