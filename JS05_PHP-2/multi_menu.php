<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilMenuBertingkat(array $menu, $level = 0) {
    echo str_repeat("  ", $level) . "<ul>\n";
    foreach ($menu as $item) {
        echo str_repeat("  ", $level + 1) . "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu'], $level + 1);
        }
        echo "</li>\n";
    }
    echo str_repeat("  ", $level) . "</ul>\n";
}

tampilMenuBertingkat($menu);
?>