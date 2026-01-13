<?php get_header(); ?>

<?php
$html = file_get_contents('https://femuse-clinic.jp/online/privacy%26policy/');
libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

// 例：<main id="main"> を抜き出す（実際の構造に合わせて変更）
$node = $xpath->query('//*[@id="main"]')->item(0);

if ($node) {
  echo $dom->saveHTML($node);
} else {
  echo $html; // フォールバック
}
?>

<?php get_footer(); ?>