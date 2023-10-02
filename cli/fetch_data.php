<pre> </pre>
<?php
/*
// Замените следующие переменные своими данными
$redmineUrl = 'https://redmine.shellpea.com/projects/p-n-t?jump=my'; // Замените на адрес вашего Redmine
$apiKey = '113c21e19606e535d3e5dbef0fdaea3d0c6280d4'; // Замените на свой API ключ пользователя

// Функция для выполнения запросов к API Redmine
function callRedmineApi($url, $apiKey): bool|string
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Redmine-API-Key: ' . $apiKey));
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Ссылка на API Redmine для получения списка задач
$apiUrl = $redmineUrl . '/issues.json';

// Вызываем API Redmine с использованием API ключа
$response = callRedmineApi($apiUrl, $apiKey);

// Преобразуем JSON-ответ в массив
$tasks = json_decode($response, true);

// Выводим список задач
if (!empty($tasks) && isset($tasks['issues'])) {
    echo "Список задач в Redmine:\n";
    foreach ($tasks['issues'] as $task) {
        echo "ID: " . $task['id'] . "\n";
        echo "Тема: " . $task['subject'] . "\n";
        echo "Описание: " . $task['description'] . "\n";
        echo "Статус: " . $task['status']['name'] . "\n";
        echo "Приоритет: " . $task['priority']['name'] . "\n";
        echo "Исполнитель: " . $task['assigned_to']['name'] . "\n";
        echo "----------------------------------------\n";
    }
} else {
    echo "Не удалось получить список задач из Redmine.\n";
}*/

/*require_once "composer.json";
require ("../vendor/autoload.php");
// Замените следующие переменные своими данными
$redmineUrl = 'https://redmine.shellpea.com/my/account';
$apiKey = '113c21e19606e535d3e5dbef0fdaea3d0c6280d4';
$projectId = 1; // Идентификатор проекта, для которого вы хотите получить задачи

// Создайте HTTP-клиент
$client = new \GuzzleHTTP\Client();

// Создайте URL для запроса
$url = "$redmineUrl/issues.json?project_id=$projectId";

// Определите заголовки запроса
$headers = [
    'X-Redmine-API-Key' => $apiKey,
    'Content-Type' => 'application/json',
];

// Выполните GET-запрос к Redmine API
$response = $client->request('GET', $url, ['headers' => $headers]);

// Проверьте статус ответа
if ($response->getStatusCode() == 200) {
    // Преобразуйте ответ в массив
    $data = json_decode($response->getBody(), true);

    // Выведите список задач
    foreach ($data['issues'] as $issue) {
        echo "Задача #" . $issue['id'] . ": " . $issue['subject'] . "\n";
    }
} else {
    echo "Ошибка: Не удалось получить список задач\n";
}*/

/*// Замените следующие переменные вашими данными
$redmineApiKey = '113c21e19606e535d3e5dbef0fdaea3d0c6280d4';
$redmineUrl = 'https://redmine.shellpea.com/users/46'; // Укажите адрес вашего Redmine
$projectId = 1;

// Формируем URL для запроса
$apiUrl = $redmineUrl . '/issues.json';

// Настройки для HTTP-запроса
$options = [
    'http' => [
        'header' => "X-Redmine-API-Key: $redmineApiKey",
        'method' => 'POST',
    ],
];

// Создаем контекст для запроса
$context = stream_context_create($options);

// Выполняем HTTP-запрос
$response = file_get_contents($apiUrl, false, $context);

if ($response === false) {
    die('Ошибка при выполнении запроса к API Redmine');
}

// Декодируем JSON-ответ
$data = json_decode($response, true);

if ($data === null) {
    die('Ошибка при декодировании JSON-ответа');
}

// Выводим список задач
foreach ($data['issues'] as $issue) {
    echo 'Задача #' . $issue['id'] . ': ' . $issue['subject'] . "\n";
}*/

/*$api='b2ccdfa95816fc40268d96246195f6845b7581da';

$url="https://redmine.shellpea.com/projects/p-n-t/issues";

$options = array(
        'api-access-key' => "b2ccdfa95816fc40268d96246195f6845b7581da",
        'project_id' => 'p-n-t',
    'issue_id'  => 2084
);

$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));
$response=curl_exec($ch);
$data=json_decode($response, true);

var_dump($data);
curl_close($ch);

//curl -H "Content-Type: application/json" -H "X-Redmine-API-Key: b2ccdfa95816fc40268d96246195f6845b7581da" -X GET https://redmine.shellpea.com/projects/p-n-t/issues*/

class Issue extends ActiveResource {
    var $site = 'http://username:password@192.168.199.129:3000/';
    var $request_format = 'xml'; // REQUIRED!
}
// find issues
$issues = $issue->find ('all');
for ($i=0; $i < count($issues); $i++) {
    echo $issues[$i]->subject;
}

?>
</pre>