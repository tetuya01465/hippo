#!/usr/bin/env php
<?php
namespace tetuya01465\Hippo;

// Composerのオートローダーを読み込む
require_once __DIR__ . '/vendor/autoload.php';
// ほかに初期化用のPHPファイルがあれば読み込んでおく
// require_once …

// .envの読込
$dotenv = new \Dotenv\Dotenv(__DIR__.'/');
$dotenv->load();

echo __NAMESPACE__ . " shell\n";

$sh = new \Psy\Shell();

// シェル起動直後にプロジェクトのnamespaceを設定する
$sh->addCode(sprintf("namespace %s;", __NAMESPACE__));

$sh->run();

echo "Bye.\n";

