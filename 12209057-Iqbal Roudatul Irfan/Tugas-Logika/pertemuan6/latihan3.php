<?php

$i = 13;
if ($i >= "6" && $i < "12"){
    echo " Jam tidur 10";
}else if ($i >= "12" && $i < "18"){
    echo "Jam Tidur 8-9";
}else if ($i >= "18" && $i < "40"){
    echo "Jam tidur 7-8";
}else {
    echo "Tidak Boleh lebih dari jam 7";
}

?>