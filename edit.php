<?php
include 'connect.php';
     
if(!empty($_GET)){
    $id = ( $_GET['id']);
    $query = "SELECT author,mName,mText,mShortly FROM message WHERE id=".$id;
    $result = mysql_query ( $query ); 
    $row = mysql_fetch_array($result);
    include 'form/editForm.php';  
    
    $query = "SELECT name,post FROM comment WHERE postid=".$id;
    $res=mysql_query($query);
    while($rowcom=mysql_fetch_array($res)) { 
        printf("<p><table border='0'><tr><td>Коментарий:</td><td>".$rowcom['post']."</td></tr></table></p>");
    }    
    include 'form/addcomForm.php';
    
}   
if ('POST' === $_SERVER['REQUEST_METHOD']){ 
    if (!empty( $_POST['post'])){
        $com = ( $_POST['post']);
        $query = "INSERT INTO comment (postid,post) VALUES ('".$id."', '".$com."')";
        $result = mysql_query ( $query );
        header('Location: edit.php?id='.$id);
    }else{
        $author = ( $_POST['author'] );
        $mName = ( $_POST['mName'] );
        $mText = ( $_POST['mText'] );
        $mShortly = ( $_POST['mShortly'] );
        $query = "UPDATE message SET author='$author', mName='$mName', mText='$mText', mShortly='$mShortly' WHERE id=".$id;
        $result = mysql_query ( $query );
        if ($result) {       
            mysql_close ( $connect_db);
            header('Location: list.php'); 
        }else{
            echo mysql_error();
            mysql_close ( $connect_db);
        }
    }
    }
?>      



 