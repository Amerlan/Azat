<?php

Route::get('/player', function () {
    $video = "videos/qwe.mp4";
    $mime = "videos/mp4";
    $title = "qwe";

    return view('player')->with(compact('video', 'mime', 'title'));
});

Route::get('/video/{filename}', function ($filename) {
    $videosDir = base_path('/videos');

    if (file_exists($filePath = $videosDir."/".$filename)) {
        $stream = new \App\Http\VideoStream($filePath);
        
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }

    return response("File doesn't exists", 404);
});
