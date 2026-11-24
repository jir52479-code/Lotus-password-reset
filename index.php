<?php
if (file_exists(__DIR__ . '/bot.php')) {
    require_once __DIR__ . '/bot.php';
} else {
    header('Content-Type: application/json');
    echo '{"ok":true}';
}
