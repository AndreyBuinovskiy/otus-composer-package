# Процессор строк

Краткое описание пакета

## Требования

- PHP 8.2

## Установка

composer require andrei-buinovskii/otus-composer-package

## Использование

<?php

$processor = new StringProcessor();
echo $processor->getLength('my string')' // 9