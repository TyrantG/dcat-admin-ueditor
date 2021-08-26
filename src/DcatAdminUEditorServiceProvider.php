<?php

namespace TyrantG\UEditor;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;

class DcatAdminUEditorServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function init()
    {
        parent::init();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ueditor');

        // 注册前端组件别名
        Admin::asset()->alias('@ueditor', [
//            'css' => [],
            'js' => [
                '/vendor/dcat-admin-extensions/tyrantg/dcat-admin-ueditor/ueditor.config.js',
                '/vendor/dcat-admin-extensions/tyrantg/dcat-admin-ueditor/ueditor.all.js',
            ],
        ]);

        Admin::booting(function () {
            Form::extend('ueditor', UEditor::class);
        });
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
