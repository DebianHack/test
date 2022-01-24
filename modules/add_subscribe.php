<?php
include $_SERVER['DOCUMENT_ROOT'].'/config/db.php';

/*
1. Сделать проверку существование кнопки - done
2. Сделать проверку, если ли такой пользователь в БД - done
3. Сделать проверку статуса подписки - done
4. Если не подписан, изменить статус на 1 (то есть подписан) - done

*/
if(isset($_POST["submit"]) )
{

	if(isset($_COOKIE["polzovatel_id"]) )
	{
		$sql = "SELECT status FROM polzovateli WHERE id = ". $_COOKIE["polzovatel_id"];
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
		var_dump($row);
		
		if ($row['status'] == 0)
		{
		$sql2 = "UPDATE `polzovateli` SET `status` = '1' WHERE `id` =".$_COOKIE["polzovatel_id"];
		mysqli_query($connect, $sql2);
		var_dump($sql2);
		}
	}
}
?>