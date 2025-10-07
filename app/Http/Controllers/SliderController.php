<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
  public function index()
{
    $sliders = Slider::all()->map(function ($s) {
        return [
            '_id'       => (string) $s->_id, 
            'title'     => $s->title,
            'caption'   => $s->caption,
            'order'     => $s->order,
            'is_active' => $s->is_active,
            'image_path'=> $s->image_path,
        ];
    });

    return inertia('Sliders/Index', [
        'sliders' => [
            'data' => $sliders, 
        ],
    ]);
}


public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'nullable|string|max:255',
        'caption' => 'nullable|string|max:1000',
        'order' => 'nullable|integer',
        'is_active' => 'nullable|boolean',
        'image' => 'required|image|max:4096',
    ]);

    // File store
    $file = $request->file('image');
    $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
    $path = $file->storeAs('sliders', $filename, 'public'); 

    $slider = Slider::create([
        'title' => $data['title'] ?? null,
        'caption' => $data['caption'] ?? null,
        'order' => $data['order'] ?? 0,
        'is_active' => $data['is_active'] ?? true,
        'image_path' => $path,
    ]);

    return redirect()->route('sliders.index')->with('success', 'Slider added.');
}




    public function update(Request $request, $id)
{
    $slider = Slider::findOrFail($id);

    $data = $request->validate([
        'title' => 'nullable|string|max:255',
        'caption' => 'nullable|string|max:1000',
        'order' => 'nullable|integer',
        'is_active' => 'nullable|boolean',
        'image' => 'nullable|image|max:4096',
    ]);

    if ($request->hasFile('image')) {
        if ($slider->image_path && Storage::disk('public')->exists($slider->image_path)) {
            Storage::disk('public')->delete($slider->image_path);
        }
        $file = $request->file('image');
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('sliders', $filename, 'public');
        $data['image_path'] = $path;
    }

    
    if (isset($data['is_active'])) {
        $data['is_active'] = (int) $data['is_active'];
    }

    $slider->fill($data);
    $slider->save(); 

    return redirect()->route('sliders.index')->with('success', 'Slider updated.');
}


public function destroy($id)
{
    $slider = Slider::findOrFail($id);

    if ($slider->image_path && Storage::disk('public')->exists($slider->image_path)) {
        Storage::disk('public')->delete($slider->image_path);
    }

    $slider->delete();

    return redirect()->route('sliders.index')->with('success', 'Slider deleted.');
}
}
