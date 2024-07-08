<?php

namespace Dcat\Admin\Extension\IframeTabs\Http\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Extension\IframeTabs\IframeTabs;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Navbar;
use Illuminate\Routing\Controller;

class IframeTabsController extends Controller
{
    public function index(Content $content)
    {
        $iframeTabs = new IframeTabs();

        $items = [
            'header' => '',
            'trans' => [
                'operations' => admin_trans('admin.iframe-tabs.operations'),
                'refresh_current' => admin_trans('admin.iframe-tabs.refresh_current'),
                'close_current' => admin_trans('admin.iframe-tabs.close_current'),
                'close_all' => admin_trans('admin.iframe-tabs.close_all'),
                'close_other' => admin_trans('admin.iframe-tabs.close_other'),
                'open_in_new' => admin_trans('admin.iframe-tabs.open_in_new'),
                'open_in_pop' => admin_trans('admin.iframe-tabs.open_in_pop'),
                'scroll_left' => admin_trans('admin.iframe-tabs.scroll_left'),
                'scroll_right' => admin_trans('admin.iframe-tabs.scroll_right'),
                'scroll_current' => admin_trans('admin.iframe-tabs.scroll_current'),
                'refresh_succeeded' => admin_trans('admin.refresh_succeeded'),
            ],
            'home_uri' => admin_base_path('dashboard'),
            'home_title' => admin_trans('admin.menu_titles.index'),
            'home_icon' => $iframeTabs->config('home_icon', 'fa-home'),
            'use_icon' => $iframeTabs->config('use_icon', true) ? '1' : '',
            'pass_urls' => implode(',', $iframeTabs->config('pass_urls', ['/auth/logout'])),
            'iframes_index' => admin_url(),
            'tabs_left' => $iframeTabs->config('tabs_left', '42'),
            'bind_urls' => $iframeTabs->config('bind_urls', 'none'),
            'bind_selecter' => $iframeTabs->config('bind_selecter', '.box-body table.table tbody a.grid-row-view,.box-body table.table tbody a.grid-row-edit,.box-header .pull-right .btn-success'),
        ];

        \View::share($items);

        Admin::navbar(function (Navbar $navbar) {
            $navbar->left(view('iframe-tabs::ext.tabs'));
            $navbar->right(view('iframe-tabs::ext.options'));
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
