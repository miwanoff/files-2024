<?php
$h = fopen("my_file.html", "w"); // Буде відкритий файл нульової довжини "my_file.html" для записи.
$text = "Додамо новий текст у файл.";
// if (fwrite($h, $text)) {
//     echo "Запис зроблено успішно";
// } else {
//     echo "Виникла помилка при запису даних";
// }

// $content = fread($h, filesize("my_file.html"));// зчитує вміст всього файлу
// echo $content; // виводить вміст файлу на екран
// fclose($h);

// fwrite($h, $text);
// fwrite($h, "Lorem");
// fwrite($h, "Lorem");
// fwrite($h, "Lorem");
// fclose($h);
$filename = 'text.txt';
// $somecontent = "дополнительно";
// if (is_writable($filename)) { // Если файл существует и доступен для записи.
//     if (!$handle = fopen($filename, 'a')) { // файл открывается режиме "записи в конец", если он не открылся успешно, $handle примет значение false
//         echo "Нельзя открыть файл $filename";
//         exit;
//     }
//     if (fwrite($handle, $somecontent) === false) { // Запись строки $somecontent в файл, если не успешно - fwrite() вернет false
//         echo "Не могу произвести запись в файл $filename";
//         exit;
//     }
//     echo "Текст \"" . $somecontent . "\"был записан в файл $filename";
//     fclose($handle);
// } else {
//     echo "Файл $filename недоступен для записи";
// }

$file = fopen($filename, "r");
$arr = [];
//Выводит строки файла до тех пор, пока не будет достигнут конец файла
while (!feof($file)) {
    $arr[] = "<h2>" . fgets($file) . "</h2>";
}

print_r($arr);

$arr1 = file($filename);

print_r($arr1);

echo getcwd();
echo "\n";
echo realpath("/");
echo "\n";
$name = "my_path";
if (!is_dir($name)) {
    mkdir($name); // создание каталога по указанному пути
}
echo realpath($name); // реальный путь к созданному каталогу