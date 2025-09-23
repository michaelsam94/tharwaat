<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title_en',
        'title_ar',
        'title_bg',
        'subtitle_en',
        'subtitle_ar',
        'subtitle_bg',
        'description_en',
        'description_ar',
        'description_bg',
        'button_text_en',
        'button_text_ar',
        'button_text_bg',
        'button_link',
        'image',
        'mobile_image',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        $titleField = 'title_' . $locale;
        
        if (isset($this->attributes[$titleField]) && !empty($this->attributes[$titleField])) {
            return $this->attributes[$titleField];
        }
        
        return $this->title_en ?? '';
    }

    public function getSubtitleAttribute()
    {
        $locale = app()->getLocale();
        $subtitleField = 'subtitle_' . $locale;
        
        if (isset($this->attributes[$subtitleField]) && !empty($this->attributes[$subtitleField])) {
            return $this->attributes[$subtitleField];
        }
        
        return $this->subtitle_en ?? '';
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $descriptionField = 'description_' . $locale;
        
        if (isset($this->attributes[$descriptionField]) && !empty($this->attributes[$descriptionField])) {
            return $this->attributes[$descriptionField];
        }
        
        return $this->description_en ?? '';
    }

    public function getButtonTextAttribute()
    {
        $locale = app()->getLocale();
        $buttonTextField = 'button_text_' . $locale;
        
        if (isset($this->attributes[$buttonTextField]) && !empty($this->attributes[$buttonTextField])) {
            return $this->attributes[$buttonTextField];
        }
        
        return $this->button_text_en ?? '';
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

    public function getMobileImageUrlAttribute()
    {
        if ($this->mobile_image) {
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
            return $baseUrl . '/storage/' . $this->mobile_image;
        }
        return $this->image_url;
    }
}