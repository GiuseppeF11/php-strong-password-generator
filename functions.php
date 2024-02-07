<?php 
    var_dump($_GET["password"]);

    $n= $_GET["password"];
    
    function getPass($n) {
        $simboliammessi = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&/()=?^>*_-';
        $passwordCasuale = '';
    
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($simboliammessi) - 1);
            $passwordCasuale .= $simboliammessi[$index];
        }
    
        return $passwordCasuale;
    }
 
    
    var_dump(strlen(getPass($n)));
?>