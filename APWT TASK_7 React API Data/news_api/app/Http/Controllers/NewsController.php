<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return response()->json([
            'status' => 200,
            'news' => $news,
        ]);
    }

    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->priority = $request->input('priority');
        $news->image_path = $request->input('image_path');
        $news->category = $request->input('category');
        $news->save();

        return response()->json([
            'status' => 200,
            'message' => 'News Added Successfully!...',
        ]);
    }

    public function edit($id)
    {
        $news = News::find($id);
        return response()->json([
            'status' => 200,
            'news' => $news,
        ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->priority = $request->input('priority');
        $news->image_path = $request->input('image_path');
        $news->category = $request->input('category');
        $news->update();

        return response()->json([
            'status' => 200,
            'message' => 'News Updated Successfully!...',
        ]);
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return response()->json([
            'status' => 200,
            'message' => 'News Deleted Successfully!...',
        ]);
    }
    
}
