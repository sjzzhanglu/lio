<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EndaEditor;

class HomeController extends Controller
{
    // 	编辑器上传图片
    public function upload()
    {
    	// path 为 public 下面目录，比如我的图片上传到 public/uploads 那么这个参数你传uploads 就行了

        $data = EndaEditor::uploadImgFile('markdown');

        return json_encode($data);
    }
}
