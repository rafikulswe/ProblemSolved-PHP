<?php

$unSerializeArray = array('4', '2', '1', '3'); //ID (primary key) of database table name "user_posts"
$i=1;
foreach($unSerializeArray as $pkID) {
    echo "ID value ".$pkID .'=' .$i.'<br>';  
    $i++;
}



//when you wants to sort your post id.

    // $pkIDArray = array('4', '2', '1', '3'); //ID (primary key) of database table name "user_posts"
    // $i=1;
    // foreach($pkIDArray as $pkID) {
    //     DB::table('user_posts')->find($pkID)->update([
    //         'sl_no' => $i   //'sl_no' is a field/column of database table name "user_posts"
    //     ]);
    //     $i++;
    // }
?>