<?php

namespace TyrantG\UEditor;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return '编辑器基础设置';
    }

    protected function formatInput(array $input)
    {
        $input['upload_path'] = $input['upload_path'] ?: 'public';

        return $input;
    }

    public function form()
    {
        $this->text('upload_path', '上传路径')->default('public');
    }
}
