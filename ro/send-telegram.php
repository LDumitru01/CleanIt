<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['success' => false]);
  exit;
}

$name  = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');

if ($name === '' || $phone === '') {
  echo json_encode(['success' => false]);
  exit;
}

/* DATE TELEGRAM */
$botToken = '7983945444:AAFr0DmZwpEx0h1uWcB8ReaGrZk9gprllMQ';
$chatId   = '-5082356822';

/* MESAJ */
$message = "📩 *Cerere consultare nouă*\n\n"
         . "👤 Nume: *{$name}*\n"
         . "📞 Telefon: *{$phone}*\n";

/* TRIMITERE */
$url = "https://api.telegram.org/bot{$botToken}/sendMessage";

$data = [
  'chat_id' => $chatId,
  'text' => $message,
  'parse_mode' => 'Markdown'
];

$options = [
  'http' => [
    'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data),
  ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo json_encode(['success' => $result !== false]);
