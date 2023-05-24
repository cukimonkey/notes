<?php
//once data inserted, we need to close the connection
if (isset($conn)){
    mysqli_close($conn);
}

?>
