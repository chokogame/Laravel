<?php
// PHP情報の表示
echo "PHP Version: " . phpversion() . "<br>";

// Laravel環境の問題を検出
$storagePath = __DIR__ . '/storage';
$bootstrapCachePath = __DIR__ . '/bootstrap/cache';

echo "Storage directory exists: " . (is_dir($storagePath) ? 'Yes' : 'No') . "<br>";
echo "Storage directory writable: " . (is_writable($storagePath) ? 'Yes' : 'No') . "<br>";
echo "Bootstrap/cache exists: " . (is_dir($bootstrapCachePath) ? 'Yes' : 'No') . "<br>";
echo "Bootstrap/cache writable: " . (is_writable($bootstrapCachePath) ? 'Yes' : 'No') . "<br>";

// .envファイルの確認
$envPath = __DIR__ . '/.env';
echo ".env file exists: " . (file_exists($envPath) ? 'Yes' : 'No') . "<br>";

// エラーログの最新部分を表示
$logPath = __DIR__ . '/storage/logs/laravel.log';
if (file_exists($logPath)) {
    echo "<h3>Recent Error Log:</h3>";
    $logContent = file_get_contents($logPath);
    // 最後の10,000文字だけを表示
    echo "<pre>" . htmlspecialchars(substr($logContent, -10000)) . "</pre>";
} else {
    echo "Error log not found.<br>";
}
