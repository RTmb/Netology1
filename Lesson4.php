<?php 
$str = file_get_contents('./Lesson4.json');
$data = json_decode($str, true);
?>


 <html> 
  <head>
    <title>ДЗ по настройке веб-сервера. Адресная книга</title>
  </head>
  
  <body>
    <table>
      <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Телефон</td>
      </tr>
      <?php foreach($data as $datum) { ?>
      <tr>
        <td><?php echo $datum['firstName'] ?></td>
        <td><?php echo $datum['lastName'] ?></td>
        <td><?php echo $datum['phoneNumber'] ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
<html> 