@extends('layout')

@section('main')

	<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">

	<video id="example_video_1" class="video-js vjs-default-skin vjs-big-play-centered"
     controls preload="auto" height="600" width="980">

        <source src="{{asset('videos/qwe.mp4') }}" type="{{$mime ?? ''}}" />
    </video>

	<script src="//vjs.zencdn.net/4.12/video.js"></script>

	<script>
	videojs(document.getElementById('example_video_1'), {}, function() {
	});
    </script>

    @endsection
