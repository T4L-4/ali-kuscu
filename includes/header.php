<?php
if (!isset($base_path)) {
    $base_path = '';
}
if (!isset($page_title)) {
    $page_title = 'Ali Kuşçu Camii | İlim, Bilim ve Gençlik Merkezi';
}
if (!isset($page_desc)) {
    $page_desc = 'Ali Kuşçu ve Fatih Sultan Mehmed\'in ilim ve fen mirasını geleceğe taşıyoruz. Gençliği bilim, teknoloji ve irfanla buluşturan cami.';
}
?><!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_desc; ?>" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>style.css" />
</head>

<body>
