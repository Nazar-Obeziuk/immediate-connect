<?php
require_once 'config.php'; // Подключение конфигурационного файла
$domain = $baseURL; // Замените на домен вашего сайта
$ignoreFiles = ['translations.php', 'sitemap.php', '404.php', 'sitemap-generation.php', 'lowercase_redirect.php']; // Файлы для игнорирования
$ignoreFolders = ['functions', 'layout', 'static']; // Директории для игнорирования
$dateTimeFormat = 'Y-m-d\TH:i:sP'; // Формат даты и времени для lastmod

// Функция для получения всех страниц
function getPages($dir, $domain, $ignoreFiles, $ignoreFolders, $dateTimeFormat) {
    $pages = [];
    $iterator = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    foreach (new RecursiveIteratorIterator($iterator) as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $filePath = $file->getPathname();
            $relativePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $filePath);
            $relativePath = str_replace('\\', '/', $relativePath); // Нормализация слешей
            $relativePathWithoutExtension = preg_replace('/\.php$/', '', $relativePath); // Удаление расширения .php

            // Пропуск файлов в игнорируемых папках
            $skipFile = false;
            foreach ($ignoreFolders as $folder) {
                if (strpos($relativePathWithoutExtension, '/' . $folder . '/') !== false) {
                    $skipFile = true;
                    break;
                }
            }
            if ($skipFile || in_array(basename($file), $ignoreFiles)) {
                continue;
            }

            // Удаление 'index' для корневого URL
            if (trim($relativePathWithoutExtension, '/') === 'index') {
                $relativePathWithoutExtension = '';
            }

            // Формирование окончательного URL
            $url = $relativePathWithoutExtension === '' ? $domain : $domain . rtrim($relativePathWithoutExtension, '/') . '/';

            $lastMod = date($dateTimeFormat, $file->getMTime());
            $priority = ($url == $domain) ? '1.0' : '0.8'; // Установка приоритета
            $pages[] = [
                'loc' => $url,
                'lastmod' => $lastMod,
                'changefreq' => 'daily',
                'priority' => $priority
            ];
        }
    }
    return $pages;
}

// Получение страниц для карты сайта
$sitemapEntries = getPages($_SERVER['DOCUMENT_ROOT'], $domain, $ignoreFiles, $ignoreFolders, $dateTimeFormat);

// Начало генерации XML
$sitemapXMLContent = "<?xml version='1.0' encoding='UTF-8'?>\n";
$sitemapXMLContent .= "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>\n";

foreach ($sitemapEntries as $entry) {
    $sitemapXMLContent .= "\t<url>\n";
    $sitemapXMLContent .= "\t\t<loc>" . htmlspecialchars($entry['loc']) . "</loc>\n";
    $sitemapXMLContent .= "\t\t<lastmod>" . $entry['lastmod'] . "</lastmod>\n";
    $sitemapXMLContent .= "\t\t<changefreq>" . $entry['changefreq'] . "</changefreq>\n";
    $sitemapXMLContent .= "\t\t<priority>" . $entry['priority'] . "</priority>\n";
    $sitemapXMLContent .= "\t</url>\n";
}

$sitemapXMLContent .= "</urlset>";

// Сохранение sitemap.xml
$sitemapFilePath = $_SERVER['DOCUMENT_ROOT'] . '/sitemap.xml';
file_put_contents($sitemapFilePath, $sitemapXMLContent);

// Отправка sitemap.xml в браузер
header('Content-Type: application/xml');
echo $sitemapXMLContent;
?>
