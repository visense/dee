<?php
//$link=mysql_connect("localhost","simplecmsuser726","u6a#|0E#m-1X") or die("not find:".mysql_error());
//mysql_select_db("simplecms726",$link) or die("can\'t use db:".mysql_error());
//$result=mysql_query("SELECT * FROM pages");
////while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
////    print($result);echo "</br>\n";
////};
//while($row=mysql_fetch_object($result)){
//    //echo "$result";
//    echo "ID:".$row->ID.
//    $row->text."</br>\n";
//};

//common connections for mysql 
//$conn=mysql_connect("localhost", "simplecmsuser726", "u6a#|0E#m-1X");
//mysql_select_db("simplecms726");
//$result=mysql_query("select * from pages");


//fetch array(获取变量)
//while($row=mysql_fetch_array($result, MYSQL_ASSOC))
//{
//    print_r($row);echo "<br/>\n";

//};


// fetch object(获取对象)
//while($row=mysql_fetch_object($result)){
//    echo "ID:".$row->id."&nbsp;&nbsp;&nbsp;&nbsp;".
//    $row->menulabel."&nbsp;&nbsp;&nbsp;&nbsp;".
//    $row->content."<br/>\n";
//}

//pdo abstract layer
//$dsn="mysql:dbname=simplecms726;host=localhost";
//try{
//    $pdo=new PDO($dsn, "simplecmsuser726", "u6a#|0E#m-1X");
//    echo "connect success!<br/>\n";
//    $sql="select * from pages";
//    $pdo->query("set names utf8");
//    foreach($pdo->query($sql) as $row){
//       // var_dump($row);
//       print_r($row);
//        echo "<br/>\n";
//    }

//    //anthoer method for fetch array
//    //$result=$pdo->query($sql);
//    //while($row=$result->fetch(PDO::FETCH_ASSOC)){
//    //    print_r ($row);
//    //    echo "<br/>\n";
//    //};


//}catch(PDOException $e){
//    echo "connect failed <br/>\n";
//    //var_dump($e);
//    print_r($e);
//}


//mysqli extension
$mysqli=new mysqli("localhost", "simplecmsuser726", "u6a#|0E#m-1X", "simplecms726");
$query="select * from pages";
//$mysqli->query("set names utf8");
$result=$mysqli->query($query);
if($result){
    while($row=$result->fetch_object()){
        print_r ($row);
    };
}else{
    echo "failed";
}
$result->free();
$result->close();
?>

<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>-->
