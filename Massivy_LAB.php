<?php
 $admin_array = array(
     1 => "Иван Иванович",
     2 => "день открытых дверей",
 );
 $day = 12;
 $name = "С уважением, Василий.";
 echo "Уважаемый (ая), ".$admin_array[1]."! </br>",
      "Приглашаем Вас на ".$admin_array[2].".</br>",
      "Дата события: $day мая.</br>",
      $name;
 ?>