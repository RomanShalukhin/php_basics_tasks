<?php
/*8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии,
что значение переменной age является отрицательным числом,
или вовсе числом не является.*/
$age = 28;
if ($age >= 18 and $age <= 59)
    echo "Вам еще работать и работать";
elseif ($age > 59)
    echo "Вам пора на пенсию";
elseif ($age >= 0 and $age <= 17)
    echo "Вам еще рано работать";
else
    echo "Неизвестный возраст";