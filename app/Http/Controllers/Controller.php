<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


abstract class Controller
{
    
    public function uploadImage($img,$path){
        $extension = $img->getClientOriginalExtension();
        if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'webp') {
            $app_screenshot_name = $img->getClientOriginalName();
            $abs_path = storage_path("app/public/$path");
            $img->move($abs_path, $app_screenshot_name);
            $file_path_to_store = "storage/$path" . $app_screenshot_name;
            return $file_path_to_store;
        }
    }

    public function uploadFile($img,$path){
        $extension = $img->getClientOriginalExtension();
        if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'webp'|| $extension == 'avi'|| $extension == 'mov'|| $extension == 'mp4') {
            $app_screenshot_name = $img->getClientOriginalName();
            $abs_path = storage_path("app/public/$path");
            $img->move($abs_path, $app_screenshot_name);
            $file_path_to_store = "storage/$path" . $app_screenshot_name;
            return $file_path_to_store;
        }
    }


    public function deleteImage($filePath)
    {
        try {
            $filePaths = str_replace('storage/', '', $filePath);

            if (Storage::exists($filePaths)) {
                Storage::delete($filePaths);
                return true;
            } else {
                Log::info('noo');
                return false;
            }
        } catch (Exception $e) {
           Log::info($e->getMessage());
        }
        
    }
}
