<?php
function transliterate($text) {
    $transliterationTable = [
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'Ts',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya', 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
        'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h',
        'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => 'ie', 'ы' => 'y', 'ь' => '', 'э' => 'e',
        'ю' => 'yu', 'я' => 'ya', ' ' => '-', '—' => '-', '–' => '-',
        // Дополните таблицу по необходимости
    ];
    return strtr($text, $transliterationTable);
}

function createSlug($str) {
    $str = transliterate($str);
    $str = preg_replace('/[^a-z0-9-]/', '-', strtolower($str));
    $str = preg_replace('/-+/', '-', $str);
    return trim($str, '-');
}

function generateContents($html, $translate) {
    $dom = new DOMDocument();
    @$dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    $xpath = new DOMXPath($dom);

    $contents = "<details><summary>{$translate['table_contents_title']}</summary><ol>";
    $currentH2 = null;

    foreach ($xpath->query('//h2 | //h3') as $node) {
        $id = createSlug($node->textContent);
        $node->setAttribute('id', $id);

        if ($node->tagName === 'h2') {
            if ($currentH2) {
                // Закрываем предыдущий список h3, если он открыт
                $contents .= "</ol></li>";
            }
            $contents .= "<li><a href='#{$id}'>" . htmlspecialchars($node->textContent, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</a><ol class='level-2'>";
            $currentH2 = true;
        } elseif ($node->tagName === 'h3') {
            $contents .= "<li class='level-2'><a href='#{$id}'>" . htmlspecialchars($node->textContent, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "</a></li>";
        }
    }

    if ($currentH2) {
        $contents .= "</ol></li>"; // Закрываем последний список h3
    }

    $contents .= "</ol></details>";

    // Закрываем основной список и details
    $placeholder = $xpath->query("//*[@id='contents-placeholder']")->item(0);
    if ($placeholder) {
        $fragment = $dom->createDocumentFragment();
        $fragment->appendXML($contents);
        $placeholder->parentNode->replaceChild($dom->importNode($fragment, true), $placeholder);
    }

    return html_entity_decode($dom->saveHTML(), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>
