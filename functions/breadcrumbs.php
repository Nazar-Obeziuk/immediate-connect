<?php
// Функция generateBreadcrumbs генерирует массив хлебных крошек
function generateBreadcrumbs($page_lang, $translations, $currentPath, $page_title = '') {
    $breadcrumbs = [];

    // Путь для 'Home' не содержит языковой сегмент для английского
    $homePath = $page_lang === 'en' ? '/' : '/' . $page_lang . '/';
    $breadcrumbs[] = [
        'name' => $translations['breadcrumbs'][$page_lang]['home'],
        'path' => $homePath
    ];

    $pathAccumulator = '/' . $page_lang;
    $pathParts = array_filter(explode('/', parse_url($currentPath, PHP_URL_PATH)));
    array_shift($pathParts); // Удаляем первый элемент, который является языковым сегментом

    // Проверяем, есть ли сегменты перед последним элементом
    if (count($pathParts) > 1) {
        foreach ($pathParts as $key => $part) {
            // Не добавляем последний элемент из URL в крошки
            if ($key === array_key_last($pathParts)) break;

            $pathAccumulator .= '/' . $part;
            $crumbName = $translations['breadcrumbs'][$page_lang][$part] ?? str_replace('-', ' ', ucfirst($part));

            $breadcrumbs[] = [
                'name' => $crumbName,
                'path' => $pathAccumulator
            ];
        }
    }

    // Добавляем текущую страницу, если её название задано и это не повтор последнего URL сегмента
    if ($page_title) {
        $breadcrumbs[] = [
            'name' => $page_title,
            'path' => 'javascript:void(0);', // Текущая страница не имеет ссылки
            'current' => true // Помечаем как текущую страницу
        ];
    }

    return $breadcrumbs;
}
?>
