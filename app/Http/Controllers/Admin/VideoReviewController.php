<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoReviewController extends BaseAdminController
{
    public function index(Request $request)
    {
        $query = VideoReview::query();

        if ($search = $request->query('q')) {
            $query->where('title', 'like', "%{$search}%");
        }

        $videos = $query->latest()->paginate(10)->withQueryString();

        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|url',
            'thumbnail' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = Storage::disk('public')->putFile('videos', $request->file('thumbnail'));
        } else {
            $videoId = $this->extractYoutubeId($data['youtube_link']);
            if ($videoId) {
                $data['thumbnail'] = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";
            }
        }

        $data['status'] = $request->boolean('status');
        VideoReview::create($data);

        return redirect()->route('admin.videos.index')->with('success', 'Video review berhasil ditambahkan.');
    }

    public function edit(VideoReview $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, VideoReview $video)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|url',
            'thumbnail' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail && str_starts_with($video->thumbnail, 'videos/')) {
                Storage::disk('public')->delete($video->thumbnail);
            }
            $data['thumbnail'] = Storage::disk('public')->putFile('videos', $request->file('thumbnail'));
        }

        $data['status'] = $request->boolean('status');
        $video->update($data);

        return redirect()->route('admin.videos.index')->with('success', 'Video review berhasil diperbarui.');
    }

    public function destroy(VideoReview $video)
    {
        if ($video->thumbnail && str_starts_with($video->thumbnail, 'videos/')) {
            Storage::disk('public')->delete($video->thumbnail);
        }

        $video->delete();

        return redirect()->route('admin.videos.index')->with('success', 'Video review berhasil dihapus.');
    }

    private function extractYoutubeId(string $url): ?string
    {
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([A-Za-z0-9_-]{11})/', $url, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
