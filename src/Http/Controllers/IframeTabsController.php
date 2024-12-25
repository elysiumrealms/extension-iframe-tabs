<?php

namespace Dcat\Admin\IframeTabs\Http\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\IframeTabs\IframeTabsServiceProvider;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Navbar;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class IframeTabsController extends Controller
{
    public function index(Content $content)
    {
        View::share([
            'header' => '',
            'trans' => array_merge(
                IframeTabsServiceProvider::trans('iframe-tabs.options.actions'),
                ['refresh_succeeded' => admin_trans('admin.refresh_succeeded')]
            ),
            'home_uri' => admin_base_path('dashboard'),
            'home_title' => admin_trans('menu.titles.index'),
            'home_icon' => IframeTabsServiceProvider::setting('home_icon', 'fa-home'),
            'use_icon' => IframeTabsServiceProvider::setting('use_icon', true) ? '1' : '',
            'pass_urls' => implode(',', IframeTabsServiceProvider::setting('pass_urls', ['/auth/logout'])),
            'iframes_index' => admin_url(),
            'tabs_left' => IframeTabsServiceProvider::setting('tabs_left', '42'),
            'bind_urls' => IframeTabsServiceProvider::setting('bind_urls', 'none'),
            'bind_selecter' => IframeTabsServiceProvider::setting(
                'bind_selecter',
                implode(',', [
                    '.box-body table.table tbody a.grid-row-view',
                    '.box-body table.table tbody a.grid-row-edit',
                    '.box-header .pull-right .btn-success',
                ])
            ),
        ]);

        Admin::navbar(function (Navbar $navbar) {
            $navbar->left(view('dcat-admin.iframe-tabs::ext.tabs'));
            $navbar->right(view('dcat-admin.iframe-tabs::ext.options'));
        });
        return $content;
    }

    public function dashboard(Content $content)
    {
        return $content
            ->header('首页')
            ->description('首页')
            ->body("首页");
    }
}
