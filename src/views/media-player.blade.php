<div id='ep{{ $ep_id }}' class='text-lg border audio-player-container rounded-xl'>

    <div class="flex">

        <div class="pt-4 pb-4 pl-4 sm:block">

            <div class='thumbnail' style='background-image: url("{{ $cover_url }}")'></div>

        </div>

        <div class="flex items-center justify-center px-6 md:px-8">

            @if($media_type == "audio")

                <audio class='audio-widget' preload="metadata">

                    <source src="{{ $media_url }}" type="audio/mpeg">

                </audio>

                <button class="mx-auto play-icon"></button>
            
            @elseif($media_type == "video")
                
                <video controls class='video-widget' preload="metadata">
                    <source src="{{ $media_url }}" type="video/mpeg">
                        Your browser does not support the video tag.
                </video> 

            @endif

        </div>

        <div class="w-full pr-4">

            <h6 class='mt-5 text-xs font-bold uppercase show-title'>{!! $media_title !!}</h6>
            <h1 class='mt-1 text-xl font-bold pod-title'>{!! $media_title !!}</h1>

            @if($media_date)

                <h6 class='p-0 m-0 text-xs uppercase'>{{ date('j F, Y', strtotime($media_date)) }}</h6>

            @endif

            @if($media_type == "audio")

                <div class="flex mr-2">

                    <div>

                        <span class="text-base current-time time">0:00</span>

                    </div>

                    <div class="w-full px-1">

                        <input type="range" class="seek-slider" max="100" value="0">

                    </div>

                    <div class="text-left">

                        <span class="text-base duration time">0:00</span>

                    </div>

                </div>

                <div class='w-full' style='margin-top: -10px;'>

                    <button class="mute-icon"></button>

                    <input type="range" class="volume-slider" max="100" value="100">
                    <br style='clear: both' />

                </div>
            
            @endif

        </div>

    </div>

</div>
