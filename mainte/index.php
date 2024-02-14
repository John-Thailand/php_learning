<?php

require 'db_connection.php';

// ユーザー入力なし query
$sql = 'select * from contacts where id = 4'; // SQL文
$stmt = $pdo->query($sql); // SQL実行 ステートメント

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// ユーザー入力あり prepare bind execute
$sql = 'select * from contacts where id = :id'; // 名前付きプレースホルダー
$stmt = $pdo->prepare($sql); // プリペアードステートメント
$stmt->bindValue('id', 5, PDO::PARAM_INT); // 紐付け
$stmt->execute(); // 実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション まとまって処理 beginTransaction, commit, rollback

$pdo->beginTransaction();

try {
    // SQL処理
    $stmt = $pdo->prepare($sql); // プリペアードステートメント
    $stmt->bindValue('id', 5, PDO::PARAM_INT); // 紐付け
    $stmt->execute(); // 実行
    
    $pdo->commit();
} catch(PDOException $e) {
    $pdo->rollback(); // 更新のキャンセル
}