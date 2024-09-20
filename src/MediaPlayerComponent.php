<?php

namespace Luria\LaravelMediaPlayer;

use Illuminate\Support\Facades\View;
use Illuminate\View\Component;

class MediaPlayerComponent extends Component
{
    /**
     * The media file
     *
     * @var string
     */
    public $media_url;

    /**
     * The media type
     *
     * @var string
     */
    public $media_type;

    /**
     * The cover image
     *
     * @var string
     */
    public $cover_url;

    /**
     * The media id
     *
     * @var string
     */
    public $media_id;

    /**
     * The media title
     *
     * @var string
     */
    public $media_title;

    /**
     * The media date
     *
     * @var string
     */
    public $media_date;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $mediaUrl,
        $mediaType = null,
        $coverUrl = null,
        $mediaId = null,
        $mediaTitle = null,
        $mediaDate = null
    ) {
        $this->media_url = $mediaUrl;
        $this->media_type = $mediaType;
        $this->cover_url = $coverUrl;
        $this->media_id = $mediaId;
        $this->media_title = $mediaTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('luria::media-player');
    }
}
