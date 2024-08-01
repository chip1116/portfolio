<?php
session_start();

if ($_POST) {
    // CSRFトークンの検証
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('お問合せの送信に失敗しました');
    }

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = 'chip.014868@gmail.com';
    $subject = 'PFでお問合せがありました。';
    $message = "入力内容は以下\n";
    $message .= $_POST["name"] . "\n";
    $message .= $_POST["email"] . "\n";
    $message .= $_POST["message"];

    if (mb_send_mail($to, $subject, $message)) {
        echo "メールが送信されました";
    } else {
        echo "メールの送信に失敗しました";
    }
} else {
    echo "HTMLからのPOST送受信に失敗しました";
}
?>
