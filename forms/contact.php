<?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['phone']) && isset($_GET['text'])) {
      $phone = $_GET['phone'];
      $text = $_GET['text'];

      // Format nomor telepon WhatsApp
      $phone = preg_replace('/[^0-9]/', '', $phone);
      
      // Encode pesan untuk URL
      $text = urlencode($text);

      // Redirect ke URL WhatsApp dengan nomor telepon dan pesan yang ditentukan
      header("Location: https://api.whatsapp.com/send?phone={$phone}&text={$text}");
      exit();
    }
  }
?>
