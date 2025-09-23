<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'page',
        'type',
        'title_en',
        'title_ar',
        'title_bg',
        'content_en',
        'content_ar',
        'content_bg',
        'image',
        'button_text_en',
        'button_text_ar',
        'button_text_bg',
        'button_link',
        'settings',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'settings' => 'array',
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

    public function scopeByName($query, $name)
    {
        return $query->where('name', $name);
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

    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        $contentField = 'content_' . $locale;
        
        if (isset($this->attributes[$contentField]) && !empty($this->attributes[$contentField])) {
            return $this->attributes[$contentField];
        }
        
        return $this->content_en ?? '';
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
            // Use storage-files path for all images (since they're now stored in storage directory)
            return asset('storage-files/' . $this->image);
        }
        return null;
    }
}