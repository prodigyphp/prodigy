
@php
    $type = $type ?? 'vimeo';
    $url = $url ?? '';
     if($type == 'vimeo') {
         preg_match('/\/(\d+)/', $url, $matches);
         $vimeo_id = $matches[1] ?? '';
         $iframe_url = "//player.vimeo.com/video/{$vimeo_id}";
     }else if($type == 'youtube') {
         $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=))([^\s&]{11})/';
         preg_match($pattern, $url, $matches);
         $youtube_id = $matches[1] ?? '';
         $iframe_url = "https://www.youtube.com/embed/{$youtube_id}";
     }
@endphp


<div style="position:relative;padding-bottom:56.25%;">
    @if($iframe_url)
    <iframe src="{{ $iframe_url }}" frameborder="0" class="" style="position:absolute;height:100%;width:100%;left:0;"></iframe>
    @endif
</div>