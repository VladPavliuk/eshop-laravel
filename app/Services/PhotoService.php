<?php

namespace App\Services;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Class ShoppingCart
 * @package App\Services
 */
class PhotoService
{
    public function saveToPublic($file, $path, $title)
    {
        $initialPath = Storage::disk('public')->putFileAs(
            $path,
            $file,
            $title . '.' . $this->defineFileExtension($file)
        );
        return Storage::url($initialPath);
    }

    public function defineFileExtension($file)
    {
        return $file->getClientOriginalExtension();
    }

}