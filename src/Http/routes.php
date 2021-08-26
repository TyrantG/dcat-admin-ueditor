<?php

use Illuminate\Support\Facades\Route;
use TyrantG\UEditor\Http\Controllers\UEditorController;

//Route::any('tyrantg/ueditor/upload', UEditorController::class.'@upload')->name('tyrantg.ueditor.upload');
Route::any('tyrantg/ueditor/handle', UEditorController::class.'@handle')->name('tyrantg.ueditor.handle');
