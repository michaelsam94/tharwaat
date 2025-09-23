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
            
            // Save to storage directory (not public)
            $path = $file->storeAs($namespace, $fileNameToStore, 'storage');
            
            return $path;
        }
        return "";
    }
    
    public static function updateFile($file, $namespace, $existingPath = null)
    {
        if($file){
            // If we have an existing path, extract the filename to reuse it
            if($existingPath) {
                $fileNameToStore = basename($existingPath);
                
                // Delete the old file from storage directory
                $oldStoragePath = storage_path($existingPath);
                
                if (file_exists($oldStoragePath)) {
                    unlink($oldStoragePath);
                }
            } else {
                // Generate new filename if no existing path
                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = str_replace(' ', '', $filename).'_'.time().'.'.$extension;
            }
            
            // Save to storage directory (not public)
            $path = $file->storeAs($namespace, $fileNameToStore, 'storage');
            
            return $path;
        }
        return "";
    }
}