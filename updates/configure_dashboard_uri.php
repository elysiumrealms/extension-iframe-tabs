<?php

use Illuminate\Database\Migrations\Migration;

class ConfigureDashboardUri extends Migration
{
    public function getConnection()
    {
        return config('database.connection') ?: config('database.default');
    }

    public function up()
    {
        $menuModel = config('admin.database.menu_model');

        $menuModel::find(1)->update(['uri' => '/dashboard']);
    }

    public function down()
    {
        $menuModel = config('admin.database.menu_model');

        $menuModel::find(1)->update(['uri' => '/']);
    }
}
