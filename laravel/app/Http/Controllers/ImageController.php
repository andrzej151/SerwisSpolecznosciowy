<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Interention\Image]Facades\Image;

class ImageController extends Controller
{
    public function user_avatar($id)
    {
        $user = User::findOrFail($id);
        $img = Image::make(asset('storage/public/users/' . $id . '/avatars' . $user->avatar));
        return img;
    }
}
