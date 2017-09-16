<h3>Просмотр/Редактирование сообщения:</h3>
<form action="" method="post" >
    <table border='0'>
        <tr>
            <td>Автор сообщения:</td>
            <td><input type="text" name="author" size="30" value="<?=$row['author']?>"></td>
        </tr>
        <tr>
            <td>Название сообщения:</td>
            <td><input type="text" name="mName" size="60" value="<?=$row['mName']?>"></td>
        </tr>
        <tr>
            <td>Текст сообщения:</td>
            <td><textarea cols="50" rows="7" wrap="soft" name="mText"/><?=$row['mText']?></textarea></td>
        </tr>
        <tr>
            <td>Краткое содержание:</td>
            <td><textarea cols="50" rows="4" wrap="soft" name="mShortly"/><?=$row['mShortly']?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="Сохранить сообщение"></td>
        </tr>
    </table>              
</form>
