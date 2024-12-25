<?php
return [
    'labels' => [
        'title' => '頁籤設定',
    ],

    'fields' => [
        'dashboard' => '儀表板路由',
        'bind_urls' => '綁定方式',
        'home_icon' => '首頁圖示',
        'pass_urls' => '忽略頁籤的URL',
        'tabs_left' => '頁籤左邊距',
    ],

    'options' => [
        'actions' => [
            'operations' => '頁籤操作',
            'refresh_current' => '重新整理目前頁籤',
            'close_current' => '關閉目前頁籤',
            'close_all' => '關閉所有頁籤',
            'close_other' => '關閉其他頁籤',
            'open_in_new' => '在新視窗中開啟',
            'open_in_pop' => '在彈出視窗中開啟',
            'scroll_left' => '向左捲動',
            'scroll_right' => '向右捲動',
            'scroll_current' => '捲動到目前頁籤',
        ],
        'messages' => [
            'goto_login' => '登入逾時，正在導向登入頁面...',
            'dashboard_regex' => '無效的儀表板控制器格式，必須符合 [控制器名@方法名] 的格式。',
        ],
    ],
];
