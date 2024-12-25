<?php

namespace Dcat\Admin\IframeTabs;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Support\Helper;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('iframe-tabs.labels.title');
    }

    protected function formatInput(array $input)
    {
        $input['pass_urls'] = collect(
            Helper::array($input['pass_urls'])
        )->map(function ($url) {
            return '/' . trim($url, '/');
        })->unique()->toArray();

        return $input;
    }

    public function form()
    {
        $this->text(
            'dashboard',
            $this->trans('iframe-tabs.fields.dashboard')
        )->rules(
            [
                'regex:/^[a-zA-Z0-9_\/]+@[a-zA-Z0-9_\/]+$/',
            ],
            [
                'regex' => $this->trans(
                    'iframe-tabs.options.messages.dashboard_regex'
                ),
            ]
        )->default('HomeController@index');

        $this->select(
            'bind_urls',
            $this->trans('iframe-tabs.fields.bind_urls')
        )->options([
            'none' => admin_trans('admin.close'),
            'new_tab' => $this->trans(
                'iframe-tabs.options.actions.open_in_new'
            ),
            'popup' => $this->trans(
                'iframe-tabs.options.actions.open_in_pop'
            ),
        ])->default('none');

        $this->text(
            'home_icon',
            $this->trans('iframe-tabs.fields.home_icon')
        )->default('fa-home');

        $this->tags(
            'pass_urls',
            $this->trans('iframe-tabs.fields.pass_urls')
        )->default([
            '/auth/logout',
        ]);

        $this->number(
            'tabs_left',
            $this->trans('iframe-tabs.fields.tabs_left')
        )->default(42);
    }
}
