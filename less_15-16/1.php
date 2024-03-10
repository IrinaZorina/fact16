<?php
   $file = 'hello.txt';

   // Открываем файл, чтобы получить существующее содержимое
   $current = file_get_contents($file);
   
   // Добавляем нового человека в файл
   $current .= "Hello, world! I'm Name";
   
   // Записываем содержимое обратно в файл
   file_put_contents($file, $current);
?>