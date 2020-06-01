<?php 
if(isset($_POST['age'])){
    $n=$_POST['age'];
    $name=$_POST['n'];
    if($n<18)
    echo "Dear $name you cannot vote";
    else{
        echo "Dear $name you can vote" ;
    }
   
} 
?>