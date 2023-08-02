
<?php

// variables scopes

$a = 5;  // global


function add(){
    global $a;
    $b = 5;  // local scopes
    echo $a + $b;
}
add();
echo $b;  // will generate error due to local scope

?>