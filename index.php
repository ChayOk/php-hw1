<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="task">
        <h2>1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).</h2>

        <?php
            $a = 10;
            $b = 2;
            $sum = $a + $b;
            $diff = $a - $b;
            $comp = $a * $b;
            $div = $a / $b;

            echo "<p>Сумма = {$sum} <br> Разность = {$diff} <br> Произведение = {$comp} <br> Частное = {$div} </p>";
        ?>
    </div>
    <div class="task">
        <h2>2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4-2(z-2x^2+y^2) </h2>

        <?php
            $x = 2;
            $y = 6;
            $z = 9;
            $result = ($x + 1) * 4 - 2 * ($z - 2 * pow($x, 2) + pow($y, 2));

            echo "<p>(x+1)4-2(z-2x^2+y^2) = {$result}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
        </h2>
        <?php
            $a = 17;
            $b = 10;
            $c = $a - $b;
            $d = 7;
            $result = $c + $d;

            echo "<p>Результат = {$result}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
        </h2>
        
        <?php
            $text1 = 'Привет, ';
            $text2 = 'Мир!';

            echo "<p>{$text1}{$text2}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
        </h2>
        
        <?php
            $name = 'Виталий';

            echo "<p>Привет, {$name}!</p>";
        ?>
    </div>
    <div class="task">
        <h2>6. Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.</h2>
        
        <?php
            $num = '12345';
            $sum = 0;

            for ($i = 0; $i < strlen($num); $i++) { 
                $sum += $num[$i];
            }
            
            echo "<p>Число: {$num} <br> Сумма чисел: {$sum}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            7. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года.
        </h2>
        
        <?php   
            $dateNow = date("Y-m-d H:i:s");
            $yearNow = date("Y");
            $monthNow = date("n");
            $dayNow = date("j");
            $hourNow = date("H");
            $minuteNow = date("i");
            $secNow = date("s");
            
            $secInHour = 60 * 60;
            $secInDay = $secInHour * 24;
            $secInMonth = $secInDay * 30;
            $secInYear = $secInDay * 365;                     

            $yearSince2000 = $yearNow - 2000;
            $daySince2000 = $yearSince2000 * 365 + ($monthNow - 1) * 30 + $dayNow;
            $hourSince2000 = $daySince2000 * 24 + $hourNow - 1;
            $minSince2000 = $hourSince2000 * 60 + $minuteNow - 1;
            $secSince2000 = $minSince2000 * 60 + $secNow;

            echo "<p>Секунд в часе: {$secInHour}<br> Секунд в дне: {$secInDay}<br> Секунд в месяце: {$secInMonth}<br> Секунд в году: {$secInYear}<br> Прошло секунд с 01.01.2000: {$secSince2000} <br> Дата и время в данный момент: {$dateNow}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            8. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
        </h2>
        
        <?php
            $hour = date("H");
            $minute = date("i");
            $second = date("s");

            echo "<p>Дата и время в данный момент: {$dateNow}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            9. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
        </h2>
        
        <?php
            $var = 1;
            $var += 12;
            $var -= 14;
            $var *= 5;
            $var /= 7;
            $var++;
            --$var;

            echo "<p>Полученное число: {$var}</p>";            
        ?>
    </div>
    <div class="task">
        <h2>
        10. Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу "Меня зовут &#60;ваша фамилия&#62; (сокр. &#60;ваше имя&#62; и сокр. ваше отчество). Мне &#60;ваш возраст&#62; лет". Каждая фраза должна начинаться с новой строки.
        </h2>
        
        <?php
            define('CONST_SURNAME', 'Чайко');
            define('CONST_NAME', 'Виталий');
            define('CONST_PATRONYMIC', 'Александрович');
            define('CONST_AGE', 22);

            if (!defined('CONST_SURNAME') || !defined('CONST_NAME') || !defined('CONST_PATRONYMIC') || !defined('CONST_AGE')) {
                echo "<p>Константа не существует</p>";
            } else{
                echo "<p>Меня зовут " . CONST_SURNAME . ' ' . mb_substr(CONST_NAME,0,1) . '.' . mb_substr(CONST_PATRONYMIC,0,1) . '.<br>Мне ' . CONST_AGE . ' года.</p>';
            }
        ?>
    </div>    
</body>
</html>