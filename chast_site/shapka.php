



<div id="shapka">

		<div id="logo">
			<img src="/images/logo.png"> 
		</div>

		<div id="menu">
			<a href="/" >Главная</a>
			<?php
			if(isset($_COOKIE["polzovatel_id"]))
			{
				$sql = "SELECT * FROM polzovateli WHERE id=".$_COOKIE["polzovatel_id"];
				$result = mysqli_query($connect, $sql);
				$polzovatel = mysqli_fetch_assoc($result);
				?>
				<a href="vihod.php" id="open_entry"><?php echo  $polzovatel["name"];?>&#187;</a> <!--Выйти-->
				
				<?php
			}
			else
			{
				?>
				<a href="login.php" id="open_entry">Войти</a> <!--Выйти-->
				<?php
			}

			?>
		</div>
	</div>