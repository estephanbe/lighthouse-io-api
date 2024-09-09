<?php

namespace App\Enums;

enum PreviewMediaType: string {
    case album = "album";
    case single = "single";
    case audiobook = "audiobook";
    case audiobookChapter = "audiobook-chapter";
    case course = "course";
    case movie = "movie";
    case shortClip = "short-clip";
    case musicVideo = "music-video";
    case playlist = "playlist";
    case podcast = "podcast";
    case podcastEpisode = "podcast-episode";
    case show = "show";
    case showEpisode = "show-episode";
    case song = "song";
}
