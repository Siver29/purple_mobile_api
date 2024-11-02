<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
        ]);
    
        // Store the image
        $imagePath = $request->file('image')->store('images', 'public');
    
        // Get the full URL
        $fullUrl = asset('storage/' . $imagePath);
    
        // Create a new image record
        $image = Image::create([
            'image_path' => $fullUrl, // Store the full URL
            'category' => $request->category,
        ]);
    
        return response()->json($image, 201);
    }

    // Get images by category
    public function index(Request $request, $category)
    {
        $images = Image::where('category', $category)->get();
        return response()->json($images);
    }
}
