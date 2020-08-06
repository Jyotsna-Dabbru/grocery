<?php
$dbserver="localhost";
$dbuser="root";
$dbpassword="";
$dbname="grocery";
function my_iud($query){//insert,update, delete
    global $dbserver,$dbuser, $dbpassword, $dbname;
    $cid = mysqli_connect($dbserver,$dbuser, $dbpassword, $dbname) or die("Connection failed");
    mysqli_query($cid, $query);
    $n= mysqli_affected_rows($cid);
    mysqli_close($cid);
    return $n;
}

function my_select($query){//search
    global $dbserver,$dbuser, $dbpassword, $dbname;
    $cid = mysqli_connect($dbserver,$dbuser, $dbpassword, $dbname) or die("Connection failed");
    $rs = mysqli_query($cid, $query);
    mysqli_close($cid);
    return $rs;
}

function my_one($query){//login
    global $dbserver,$dbuser, $dbpassword, $dbname;
    $cid = mysqli_connect($dbserver,$dbuser, $dbpassword, $dbname) or die("Connection failed");
    $rs = mysqli_query($cid, $query);
    $row = mysqli_fetch_array($rs);
    mysqli_close($cid);
    return $row[0];
}

function verifyuser(){
    if(isset($_SESSION['sun'])){
            return true;    
        }else{
            return false;
        }
    

    $query = "SELECT COUNT(*) FROM siteuser WHERE emailid='$u' and pwd='$p'";
    $n=my_one($query);
    if($n==1){
        return true;
    }else{
        return false;
    }
}

?>
