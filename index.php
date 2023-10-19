$errorUserLog = $_SERVER['DOCUMENT_ROOT'] . '/logs.txt'; // Формируем файл для логов
// !file_exists($errorUserLog) ? : unlink($errorUserLog); // Для проекта использовалось
$results = print_r($settings, true); // Выбираем данные для записи, true вернёт информацию вместо вывода в браузер
file_put_contents($errorUserLog, PHP_EOL.$results, FILE_APPEND); // PHP_EOL - запись с новой строки, FILE_APPEND - для добавления в файл
