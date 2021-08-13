<?php
    if(isset($_POST['uname'])){ 
        $uname = $_POST['uname'];
        if($uname == "Shahed" || $uname == ""){
           echo ""; 
        }else{
            echo "we could not find your account";
        }
    }

?>