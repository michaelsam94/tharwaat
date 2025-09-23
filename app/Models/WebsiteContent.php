<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'key',
        'page',
        'section',
        'type',
        'content_en',
        'content_ar',
        'content_bg',
        'image',
        'link',
        'attributes',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'attributes' => 'array',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByPage($query, $page)
    {
        return $query->where('page', $page);
    }

    public function scopeBySection($query, $section)
    {
        return $query->where('section', $section);
    }

    public function scopeByKey($query, $key)
    {
        return $query->where('key', $key);
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->where(function($q) use ($searchTerm) {
            $q->where('key', 'like', '%' . $searchTerm . '%')
              ->orWhere('content_en', 'like', '%' . $searchTerm . '%')
              ->orWhere('content_ar', 'like', '%' . $searchTerm . '%')
              ->orWhere('content_bg', 'like', '%' . $searchTerm . '%');
        });
    }

    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        $contentField = 'content_' . $locale;
        
        if (isset($this->attributes[$contentField]) && !empty($this->attributes[$contentField])) {
            return $this->attributes[$contentField];
        }
        
        // Fallback to English if current locale content is empty
        return $this->content_en ?? '';
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            // Try to get the current request URL, fallback to config
            try {
                $baseUrl = request()->getSchemeAndHttpHost();
                // If we're in development and using localhost, try to use 127.0.0.1:8000
                if (strpos($baseUrl, 'localhost') !== false && app()->environment('local')) {
                    $baseUrl = 'http://127.0.0.1:8000';
                }
            } catch (Exception $e) {
                // Fallback to config or default
                $baseUrl = config('app.url', 'http://127.0.0.1:8000');
            }
            
            // Use storage path for all images (since they're now stored in storage directory)
            return $baseUrl . '/storage/' . $this->image;
        }
        return null;
    }
}