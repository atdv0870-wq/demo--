<?php

$db_file = __DIR__ . '/../data/videos.db';

try {
    $pdo = new PDO("sqlite:$db_file");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table if not exists
$pdo->exec("CREATE TABLE IF NOT EXISTS videos (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 title TEXT NOT NULL,
 file_id TEXT NOT NULL,
 duration TEXT,
 tags TEXT,
 views INTEGER DEFAULT " . rand(5e4,9e5) . ",
 likes INTEGER DEFAULT " . rand(3e3,8e4) . ",
 category TEXT DEFAULT 'other'
)");

} catch(Exception $e){
 die("Database error: {$e->getMessage()}");
}