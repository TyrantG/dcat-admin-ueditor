<?php

namespace TyrantG\UEditor\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use TyrantG\UEditor\Storage;
use TyrantG\UEditor\UEditor;

class UEditorController extends Controller
{
    protected $config;

    protected $storage;

    public function __construct()
    {
        $this->config = Ueditor::getUploadConfig();
    }

    public function handle(Request $request)
    {
        $action = $request->input('action') ?: '';

        switch ($action) {
            case 'config':
                return $this->config;
            case $this->config['imageManagerActionName']:
                return $this->storage()->listFiles(
                    $this->config['imageManagerListPath'],
                    $request->get('start'),
                    $request->get('size'),
                    $this->config['imageManagerAllowFiles']);

            case $this->config['fileManagerActionName']:
                return $this->storage()->listFiles(
                    $this->config['fileManagerListPath'],
                    $request->get('start'),
                    $request->get('size'),
                    $this->config['fileManagerAllowFiles']);

            case $this->config['catcherActionName']:
                return $this->storage()->fetch($request);

            default:
                return $this->storage()->upload($request);
        }
    }

    protected function storage()
    {
        return $this->storage ?: ($this->storage = Storage::make());
    }
}
