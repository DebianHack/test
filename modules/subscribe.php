<?php 
include $_SERVER['DOCUMENT_ROOT'].'/config/db.php';

// sql запрос для выбора столбца status авторизованных пользователей 
$sql = "SELECT status FROM polzovateli WHERE id = ". $_COOKIE["polzovatel_id"]." ";
	$result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
// Проверяем подписан ли пользователь
if ($row['status'] == 1)
{
	// Подписан
	?>					
    	<!-- Выводим кнопку подписки, которая покажет что вы подписанны -->
    <div id="title">
		<p>Подписка</p> 
	</div>
		<div class="subscribe20">
    		<div class="inner">
        		<div class="stamp"></div>
        		  <h3>Подписка на журнал</h3>
        		  <p>
           При оформлении подписки на новые статьи вы будете два раза в месяц получать на ваш адрес электронной почты письмо о выпуске электронного журнала с информацией о новых статьях, размещенных на сайте за последние две недели.
        		  </p>
        		  <div style="display: none;" id="asd_subscribe_res"></div>
        		  <form id="asd_subscribe_form" method="post" action="/">
            		<div class="submit_group">
                		<input type="submit" value="Вы подписанны" id="asd_subscribe_submit" name="asd_submit">
            	   </div>
        		</form>
    			</div>
    			</div>
        <!-- Выводим таблицу с результатом выполнения формы -->
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Имя</th>
                      <th scope="col">Электронная почта</th>
                      <th scope="col">Статус подписки (1 - подписан)</th>
                    </tr>
                  </thead>
                  <tbody>
                            <?php 
                                  $sql = "SELECT * FROM polzovateli WHERE id = ". $_COOKIE["polzovatel_id"]." ";
                                  $result = mysqli_query($connect, $sql) ;
                                  while ($row2 = mysqli_fetch_assoc($result)) 
                                  {
                                      ?>
                                      <tr>
                                        <td scope="row"><?php echo $row2['id'] ?></td>
                                        <td scope="row"><?php echo $row2['name'] ?></td>
                                        <td scope="row"><?php echo $row2['email'] ?></td>
                                        <td scope="row"><?php echo $row2['status'] ?></td>
                                      </tr>
                                      <?php
                                  }
                                ?>
                </tbody>
                </table>
        <!-- -->

<?php
}
else
{
	// Не подписан

	?>			
    <!-- Выводим кнопку подписки, которая покажет что вы подписанны -->			
    <div id="title">
		<p>Подписка</p> 
	</div>
		  <div class="subscribe20">
    		<div class="inner">
        		<div class="stamp"></div>
        		      <h3>Подписка на журнал</h3>
        		      <p>
                        При оформлении подписки на новые статьи вы будете два раза в месяц получать на ваш адрес электронной почты письмо о выпуске электронного журнала с информацией о новых статьях, размещенных на сайте за последние две недели.
        		      </p>
        		<div style="display: none;" id="asd_subscribe_res"></div>
        		      <form id="asd_subscribe_form" method="POST" action="http://subscribe.local/modules/add_subscribe.php">
            		<div class="submit_group">
                	<input type="submit" value="Подписаться" id="asd_subscribe_submit" name="status">
            	</div>
        		      </form>
    		</div>
    	</div>

<?php

}
	





 