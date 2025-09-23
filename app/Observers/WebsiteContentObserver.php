<?php

namespace App\Observers;

use App\Models\WebsiteContent;
use App\Services\WebsiteContentService;

class WebsiteContentObserver
{
    /**
     * Handle the WebsiteContent "created" event.
     */
    public function created(WebsiteContent $websiteContent): void
    {
        WebsiteContentService::clearContentCache($websiteContent->key);
    }

    /**
     * Handle the WebsiteContent "updated" event.
     */
    public function updated(WebsiteContent $websiteContent): void
    {
        WebsiteContentService::clearContentCache($websiteContent->key);
    }

    /**
     * Handle the WebsiteContent "deleted" event.
     */
    public function deleted(WebsiteContent $websiteContent): void
    {
        WebsiteContentService::clearContentCache($websiteContent->key);
    }

    /**
     * Handle the WebsiteContent "restored" event.
     */
    public function restored(WebsiteContent $websiteContent): void
    {
        WebsiteContentService::clearContentCache($websiteContent->key);
    }

    /**
     * Handle the WebsiteContent "force deleted" event.
     */
    public function forceDeleted(WebsiteContent $websiteContent): void
    {
        WebsiteContentService::clearContentCache($websiteContent->key);
    }
}