<?php
session_start();

 require_once __DIR__ . '/fungsi.php';
 require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid';
  redirect_ke('index.php#contact');
}

$cid = filter_input(INPUT_POST, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$cid) {
    $_SESSION['flash_error'] = 'CID Tidak Valid.';
}

$nama  = bersihkan($_POST['txtNama'] ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');
$Captcha = bersihkan($_POST['$_txtCaptcha'] ?? '');

$errors = [];

if ($nama == '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($email == '') {
    $errors[] = 'Email wajib diisi.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format e-mail tidak valid.';
}

if ($pesan == '') {
    $errors[] = 'Pesan wajib diisi.';
}

if ($captcha == '') {
    $errors[] = 'Pertanyaan wajib diisi.';
}

if (mb_strlen($nama) < 3) {
    $errors[] = 'Nama minimal 3 karakter.';
}

if (mb_strlen($pesan) < 10) {
    $errors[] = 'Pesan minimal 10 karakter.';
}

if ($captcha != '242') {
    $errors[] = 'Jawaban ' . $captcha . ' captcha salah.';
}

?>