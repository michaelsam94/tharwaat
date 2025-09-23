<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'filename',
        'original_name',
        'path',
        'mime_type',
        'size',
        'alt_text',
        'category',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function getUrlAttribute()
    {
        if ($this->path) {
            // Use storage path for all images (since they're now stored in storage directory)
            return asset('storage/' . $this->path);
        }
        return null;
    }

    public function getFormattedSizeAttribute()
    {
        $bytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB'];
        
        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    public function getThumbnailUrlAttribute()
    {
        if (str_starts_with($this->mime_type, 'image/')) {
            return $this->url;
        }
        return null;
    }

    public function isImage()
    {
        return str_starts_with($this->mime_type, 'image/');
    }

    public function getFileIcon()
    {
        if (str_contains($this->mime_type, 'pdf')) {
            return 'i-File-Text text-danger';
        } elseif (str_contains($this->mime_type, 'word')) {
            return 'i-File-Word text-primary';
        } elseif (str_contains($this->mime_type, 'video')) {
            return 'i-Video text-info';
        } else {
            return 'i-File text-muted';
        }
    }
}
