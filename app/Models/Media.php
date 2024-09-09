<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "media";

    protected $appends = ['full_image_url', 'full_media_url'];

    public function getFullImageUrlAttribute(): ?string
    {
        if (in_array($this->type, ["movie", "music_video", "series_episode", "short_clip", "series"])) {
            return config('app.images_url').'1066x600/'.$this->thumbnail;
        } else if (in_array($this->type, ["track", "podcast_episode", "audiobook_chapter", "album", "playlist", "single", "audiobook", "audiobook_chapter", "podcast"])) {
            return config('app.images_url').'600x600/'.$this->thumbnail;
        }
        else return null;
    }

    public function getFullMediaUrlAttribute(): ?string
    {
        if (in_array($this->type, ["movie", "music_video", "series_episode", "short_clip"])) {
            return config('app.assets_url').$this->video['url'];
        } else if (in_array($this->type, ["track", "podcast_episode", "audiobook_chapter"])) {
            return config('app.assets_url').$this->audio['url'];
        }
        else return null;
    }
}
