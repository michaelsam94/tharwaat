<?php

namespace App\Services\Helper;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileService
{
    public static function saveFile($file,$namespace)
    {
        if($file){
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore = str_replace(' ', '', $filename).'_'.time().'.'.$extension;
            $dist = public_path('/manage/img/'.$namespace);
            $file->move($dist, $fileNameToStore);
            /*if(!Storage::disk('public')->path($fileNameToStore)){
            	$path = $file->storeAs($namespace,$fileNameToStore);
            	$filePath = $file->file('file')->storeAs('uploads', $fileName, 'public');
                Storage::disk('public')->put($namespace.'/'.$fileNameToStore, File::get($file));
            }*/
            return $fileNameToStore;
        }
        return "";
    }
}