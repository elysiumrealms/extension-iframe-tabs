<?php
return [
    'labels' => [
        'title' => '页签设置',
    ],

    'fields' => [
        'dashboard' => '仪表盘路由',
        'bind_urls' => '绑定方式',
        'home_icon' => '首页图标',
        'pass_urls' => '忽略页签的URL',
        'tabs_left' => '页签左边距',
    ],

    'options' => [
        'actions' => [
            'operations' => '页签操作',
            'refresh_current' => '刷新当前',
            'close_current' => '关闭当前',
            'close_all' => '关闭全部',
            'close_other' => '关闭其他',
            'open_in_new' => '新窗口打开',
            'open_in_pop' => '弹出窗打开',
            'scroll_left' => '滚动到最左',
            'scroll_right' => '滚动到最右',
            'scroll_current' => '滚动到当前',
        ],
        'messages' => [
            'goto_login' => '登录超时，正在跳转登录页面...',
            'dashboard_regex' => '无效的仪表盘控制器格式，必须符合 [控制器名@方法名] 的格式。',
        ],
    ],

];
