<?php
$link = mysqli_connect('localhost','root','root','University');
//Проверка соединения.
if(mysqli_connect_errno()) die('Ошибка соединения:
'.mysqli_connect_error());
else {
print ('Успешно установлено!!!');
//Создаем таблицу на PHP, в которую будем выводить данные
 echo '<table border="1">';
 echo '<thead>';
 echo '<tr>';
 echo '<th>ID</th>';
 echo '<th>Имя студента</th>';
 echo '<th>Группа</th>';
 echo '</tr>';
 echo '</thead>';
 echo '<tbody>';
//Делаем запрос к нашей БД
$res = mysqli_query($link,"SELECT * FROM `students`");
//Заполняем таблицу, созданную выше
if($res) {
while($row = mysqli_fetch_assoc($res)) {
 echo '<tr>';
 echo '<td>' . $row['id'] . '</td>';
 echo '<td>' . $row['name'] . '</td>';
 echo '<td>' . $row['student_group'] . '</td>';
 echo '</tr>';
}
echo '</tbody>';
echo '</table>';
mysqli_free_result($res); //очищаем занятую память - она уже не нужна
}
//Закрываем соединение
mysqli_close($link);
}
?>