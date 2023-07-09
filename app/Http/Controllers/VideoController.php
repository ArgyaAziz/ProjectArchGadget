<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $path = $video->store('videos', 'public');

            // Simpan informasi video ke database
            Video::create([
                'path' => $path,
                'title' => $request->input('title'),
                // tambahkan kolom lain yang diperlukan
            ]);

            return redirect()->back()->with('success', 'Video berhasil diunggah.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah video.');
    }
}
