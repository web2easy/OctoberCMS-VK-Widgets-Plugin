<?php

return [
    'plugin' => [
            'name' => 'Виджеты VK',
            'description' => 'Виджеты социальной сети "Вконтакте"'
    ],
    'community' => [
        'name' => 'Сообщества',
        'description' => 'Виджет тесно свяжет сайт с группой или официальной страницей ВКонтакте. В виджете отображаются новости сообщества или фотографии участников',
        'groupId' => [
            'title' => 'Идентификатор сообщества',
            'description' => 'Идентификатор сообщества',
            'placeholder' => 'Идентификатор сообщества',
            'validationmessage' => 'Поле должно быть пустым или содержать число!'
        ],
        'mode' => [
            'title' => 'Вид',
            'description' => 'Режим отображения. Возможные значения: "Участники" -  отображать участников сообщества, "Только название" — отображать только название сообщества, "Новости" — отображать стену сообщества',
            'options' => [
                'subscribers' => 'Участники',
                'news' => 'Новости',
                'name' => 'Только название'
            ]
        ],
        'width' => [
            'title' => 'Ширина',
            'description' => 'Ширина блока в пикселах. Минимальное значение: 120. При значении "auto" подстраивается под ширину блока',
            'placeholder' => 'Ширина блока в пикселах',
            'validationmessage' => 'Поле должно быть пустым, содержать число или значение auto!'
        ],
        'height' => [
            'title' => 'Высота',
            'description' => 'Высота блока в пикселах. Минимальное значение: 200. Максимальное значение: 1200. Обратите внимание, для вида «Только название» или «Участники» параметр недоступен, высота определяется автоматически в зависимости от размера родительского блока',
            'placeholder' => 'Высота блока в пикселах',
            'validationmessage' => 'Поле должно быть пустым, содержать число или значение auto!'
        ],
        'color1' => [
            'title' => 'Цвет фона',
            'description' => 'Цвет фона виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Цвет фона должен быть в формате RRGGBB!'
        ],
        'color2' => [
            'title' => 'Цвет текста',
            'description' => 'Цвет текста виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Цвет текста должен быть в формате RRGGBB!'
        ],
        'color3' => [
            'title' => 'Цвет кнопок',
            'description' => 'Цвет кнопок виджета в формате RRGGBB',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Цвет кнопок должен быть в формате RRGGBB!'
        ],
        'wide' => [
            'title' => 'Расширенный режим',
            'description' => 'Расширенный режим. В режиме «Новости» добавляется кнопка «Мне нравится» и фотография сообщества'
        ],
        'elementid' => [
            'title' => 'ID виджета',
            'description' => 'ID элемента-обертки виджета',
            'placeholder' => 'ID',
        ]
    ],
    'share' => [
        'name' => 'Публикация ссылок',
        'description' => 'Виджет позволит быстро разместить ссылку на материал с Вашего сайта на странице ВКонтакте',
        'style' => [
            'title' => 'Стиль',
            'description' => 'Стиль виджета',
            'options' => [
                'round' => 'Кнопка',
                'round_nocount' => 'Кнопка без счётчика',
                'link' => 'Ссылка',
                'link_noicon' => 'Ссылка без иконки',
                'custom' => 'Иконка'
            ]
        ],
        'text' => [
            'title' => 'Текст',
            'description' => 'Текст на кнопке',
            'default' => 'Сохранить',
            'placeholder' => 'Текст на кнопке',
        ],
        'link' => [
            'title' => 'Ссылка',
            'description' => 'Ссылка на страницу (необязательно)',
            'placeholder' => 'Ссылка',
        ],
        'elementid' => [
            'title' => 'ID виджета',
            'description' => 'ID элемента-обертки виджета',
            'placeholder' => 'ID',
        ]
    ],
    'communitymessages' => [
        'name' => 'Сообщения сообщества',
        'description' => 'Виджет предоставляет возможность общаться с посетителями сайта через Сообщения сообщества',
        'communityid' => [
            'title' => 'ID группы или страницы',
            'description' => 'Идентификатор сообщества, для которого будет создан виджет',
            'placeholder' => 'ID',
        ],
        'position' => [
            'title' => 'Расположение',
            'description' => 'Выравнивание кнопки (слева или справа)',
            'options' => [
                'left' => 'В левом нижнем углу',
                'right' => 'В правом нижнем углу'
            ]
        ],
        'expandin' => [
            'title' => 'Раскрыть через',
            'description' => 'Нужно ли раскрыть виджет сразу',
            'default' => '1',
            'options' => [
                '0' => 'Не раскрывать',
                '1' => 'Сразу',
                '5000' => '5 секунд',
                '10000' => '10 секунд',
                '15000' => '15 секунд',
                '30000' => '30 секунд',
                '40000' => '40 секунд',
                '50000' => '50 секунд',
                '60000' => '60 секунд',
                '120000' => '120 секунд'
            ]
        ],
        'openwithsound' => [
            'title' => 'Раскрывать со звуком',
            'description' => 'Включить звук при раскрытии виджета'
        ],
        'newmessagesound' => [
            'title'       => 'Звук нового сообщения',
            'description' => 'Включить звук о новом сообщении'
        ],
        'tooltip' => [
            'title' => 'Подсказка',
            'description' => 'Включить всплывающую подсказку'
        ],
        'tooltiptext' => [
            'title' => 'Текст подсказки',
            'default' => 'Есть вопрос?',
            'description' => 'Текст всплывающей подсказки',
            'placeholder' => 'Текст подсказки'
        ],
        'elementid' => [
            'title' => 'ID виджета',
            'description' => 'ID элемента-обертки виджета',
            'placeholder' => 'ID',
        ]
    ]
];

?>
