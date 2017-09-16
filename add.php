 <?php
include 'form/addForm.php'; 

if ('POST' === $_SERVER['REQUEST_METHOD'])
    {      
    include 'connect.php';
    
    $author = ( $_POST['author'] );
    $mName = ( $_POST['mName'] );
    $mText = ( $_POST['mText'] );
    $mShortly = ( $_POST['mShortly'] );
    $query = "INSERT INTO message (author,mName,mText,mShortly) VALUES ('".$author."', '".$mName."', '".$mText."', '".$mShortly."')";
    $result = mysql_query ( $query );
    if ($result) echo "Сообщение добавлено"; 
    else echo mysql_error();
    mysql_close ( $connect_db);  // Форма отправлена
    }
?>
<a href="list.php">Просмотреть список</a>