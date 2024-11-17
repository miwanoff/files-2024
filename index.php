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
//     fc$data = file_get_contents("poem.txt"); lose($handle);
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
//echo realpath($name); // реальный путь к созданному каталогу

// $n = readfile ("https://www.example.com");
//  if (!$n) 
//     echo "Ошибка чтения из файла"; // если ошибка была, то выводим сообщение
//  else 
//     echo $n; // если ошибки не было, то выводим число считанных символовfile_get_contents
// $f = file_get_contents("https://www.example.com");
// echo $f;

$data = file_get_contents("https://www.example.com"); 
echo $data;
//file_put_contents("newexample.html", $data);

// $orig_filename = "poem.txt";
// $new_filename = "myNewfile.txt";
// $status = copy($orig_filename, $new_filename) or die("Невозможно скопировать файл");
// echo "Содержимое файла успешно скопировано!";