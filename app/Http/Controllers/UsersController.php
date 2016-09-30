<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    //
     public function avatar()
    {
        return view('users.avatar');
    }

	public function avatarUpload(Request $request)
	{
		print($request);
		if ($request->isMethod('post')) {
            $file = $request->file('avatar');
            // 文件是否上传成功
            if ($file->isValid()) {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg
                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                var_dump($bool);
            }
        }
        return view('users.avatar');
	}
	

}
