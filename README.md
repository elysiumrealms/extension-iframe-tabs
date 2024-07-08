# dcat-admin iframe 多窗口扩展

## Installation

1. 安装扩展。

   ```bash
   composer require elysiumrealms/extension-iframe-tabs
   ```

2. 在后台扩展打开扩展，并导入。

3. 在 `resources/lang/zh-CN/admin.php` 添加翻譯。

   ```php
   <?php

   return [
       ...,
       'iframe-tabs' => [
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
           'goto_login' => '登录超时，正在跳转登录页面...'
       ],
   ];
   ```

4. 在 `config/admin-extensions.php` 添加配置

   ```php
   <?php

   return [
       ...,
       'iframe-tabs' => [
           'enable' => true,
           'home_action' => 'HomeController@index',
           'home_icon' => 'fa-home',
           'use_icon' => true,
           'tabs_css' => 'vendor/laravel-admin-ext/iframe-tabs/dashboard.css',
           'layer_path' => 'vendor/laravel-admin-ext/iframe-tabs/layer/layer.js',
           'pass_urls' => [
               0 => '/auth/logout',
               1 => '/auth/lock',
           ],
           'force_login_in_top' => true,
           'tabs_left' => 42,
           'bind_urls' => 'popup',
           'bind_selecter' => 'a.grid-row-view,a.grid-row-edit,.column-__actions__ ul.dropdown-menu a,.box-header .pull-right .btn-success,.popup',
       ],
   ];
   ```

5. 清除缓存

   ```bash
   php artisan cache:clear
   php artisan view:clear
   ```

6. 打开链接 你的域名/admin 即可

## Customize HTML Class

- 添加彈跳窗口。

```html
<a class="pop-link" href="popup"></a>
```

- 添加 iframe 窗口。

```html
<a class="iframe-link" href="iframe"></a>
```
