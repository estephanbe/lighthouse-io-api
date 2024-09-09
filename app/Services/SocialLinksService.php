<?php

namespace App\Services;

use App\Models\SocialLink;

class SocialLinksService
{
    public function getSocialLinks()
    {
        return SocialLink::orderBy('order')->get();
    }
}
