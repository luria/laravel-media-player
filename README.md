IN DEVELPOMNET STAGE. DO NOT USE. IT WILL NOT WORK

## Laravel Media Player

Laravel component HTML5 simple audio/video player.

### Installation
```shell
composer require luria/laravel-media-player

php artisan vendor:publish --tag=public --force
```

Add the JS and CSS to your template:

```html
<link rel="stylesheet" href="<?php echo asset('vendor/luria/css/laravelMediaPlayer.css')?>" type="text/css">
```

```html
<script src="<?php echo asset('vendor/luria/js/laravelMediaPlayer.js')?>"></script>
```

Call the component, e.g.

```html
<x-laravel-media-player
    mediaUrl="mysong.mp3"
    mediaType="audio"
    coverUrl="mySongCover.jpg"
    mediaId="1"
    mediaTitle="I like beer!!"
    mediaDate="20th Jan 2024"
/>
```

mediaUrl and mediaType are the only mandatory attribute.
