<?php

# KCAPTCHA файл конфигурации

$alphabet = "0123456789z"; # не меняйте код этой строки без замены файлов шрифтов!

# символы использумые draw CAPTCHA
//$allowed_symbols = "0123456789"; #разрешенные цифровые символы
//$allowed_symbols = "23456789abcdegkmnpqsuvxyz"; #вы можете использовать -добавить в следующую строку так же буквенные символы за исключением похожих по отображению  (o=0, 1=l, i=j, t=f)
$allowed_symbols = "0123456789"; #разрешеные к использованию сиволы

# путь к папке шрифтов
$fontsdir = 'fonts';	

# CAPTCHA длина строки или другими словами количество символов
$length = mt_rand(5,7); # при таком параметре каптча будет выводит различное количество символов на пример  5 или 6 или 7
//$length = 6; // можно задать постоянное выводимое количество символов - в данном случае 6

# CAPTCHA размер изображения (вы можете менять его , но по мнению разработчика этот параметр является оптимальным)
$width = 120;
$height = 60;

# амплитуда "искривления" символов по вертикали
$fluctuation_amplitude = 8;

#шум (различные детали в изображении каптчи для усложнения обработки -распознавания кода изображение различными программами)
//$white_noise_density=0; // no white noise
$white_noise_density=1/6;
//$black_noise_density=0; // no black noise
$black_noise_density=1/30;

# повышение безопасности путем предотвращения пробелов между символами
$no_spaces = true;

# show credits
$show_credits = false; # set to false to remove credits line. Credits adds 12 pixels to image height
$credits = 'www.captcha.ru'; # if empty, HTTP_HOST will be shown

# CAPTCHA image colors (RGB, 0-255)
//$foreground_color = array(0, 0, 0);
//$background_color = array(220, 230, 255);
$foreground_color = array(mt_rand(0,80), mt_rand(0,80), mt_rand(0,80));
$background_color = array(mt_rand(220,255), mt_rand(220,255), mt_rand(220,255));

# JPEG quality of CAPTCHA image (bigger is better quality, but larger file size)
$jpeg_quality = 100;
?>