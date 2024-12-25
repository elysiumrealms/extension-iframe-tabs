<?php
return [
    'labels' => [
        'title' => 'Tab Settings',
    ],

    'fields' => [
        'dashboard' => 'Dashboard Route',
        'bind_urls' => 'Bind Mode',
        'home_icon' => 'Home Icon',
        'pass_urls' => 'Ignored URLs',
        'tabs_left' => 'Tabs Left Padding',
    ],

    'options' => [
        'actions' => [
            'operations' => 'Tab Operations',
            'refresh_current' => 'Refresh Current',
            'close_current' => 'Close Current',
            'close_all' => 'Close All',
            'close_other' => 'Close Other',
            'open_in_new' => 'Open in New Window',
            'open_in_pop' => 'Open in Popup',
            'scroll_left' => 'Scroll to Left',
            'scroll_right' => 'Scroll to Right',
            'scroll_current' => 'Scroll to Current',
        ],
        'messages' => [
            'goto_login' => 'Session expired, redirecting to login page...',
            'dashboard_regex' => 'Invalid dashboard controller format，must be in the format of [ControllerName@MethodName].',
        ],
    ],
];
