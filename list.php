<?php
include 'connect.php';
     
$per_page=5;
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
$start=abs($page*$per_page);
$q="SELECT * FROM message ORDER BY id DESC LIMIT $start,$per_page";
$res=mysql_query($q);
while($row=mysql_fetch_array($res)) { 
    include 'form/listForm.php';
}
$q="SELECT count(*) FROM message";
$res=mysql_query($q);
$row=mysql_fetch_row($res);
$total_rows=$row[0];
$num_pages=ceil($total_rows/$per_page);
for($i=1;$i<=$num_pages;$i++) {
    if ($i-1 == $page) 
        echo $i." ";
    else 
        echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a> ";
}
?>
<br />
<a href="add.php">Добавить сообщение</a>
      