<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    //
public function index(Design $design){
        $designs = Design::with('images')->get();
        return view('admin.index', compact('designs'));
}
public function create(){
    return view('admin.create');
}

public function store(StoreRequest $request)
{
    // 1. Get validated data (Name, Price, Category, etc.)
    $validated = $request->validated();

    // 2. Create the Design record FIRST
    // We remove 'images' from the array so it doesn't try to save them in the designs table
    $design = Design::create(collect($validated)->except('img_path')->toArray());

    // 3. Handle the multiple images
    if ($request->hasFile('img_path')) {
        foreach ($request->file('img_path') as $file) {
            $path = $file->store('designs', 'public');

            // Save each path into the SECOND table (design_images)
            $design->images()->create([
                'img_path' => $path
            ]);
        }
    }

    return redirect()->route('adminHome')->with('success', 'Design created Successfully');
}

public function edit(Design $design){
    //define category array here because we wil use in edit blade
    $categories = ['Gowns', 'Two-Piece', 'Wedding-Attire', 'Dinner-Wear'];
    return view('admin.edit', compact('design', 'categories'));
}

public function update(UpdateRequest $request, Design $design)
{
    $validated = $request->validated();

    // 1. Update the main Design details (Name, Price, Category, Description)
    // We use 'except' so it doesn't try to save the 'img_path' array into the 'designs' table
    $design->update(collect($validated)->except('img_path')->toArray());

    // 2. Check if new images were uploaded
    if ($request->hasFile('img_path')) {
        
        // Optional: Delete old images from the folder and database first
        foreach ($design->images as $oldImage) {
            Storage::disk('public')->delete($oldImage->img_path);
            $oldImage->delete();
        }

        // 3. Upload the new ones
        foreach ($request->file('img_path') as $file) {
            $path = $file->store('designs', 'public');
            $design->images()->create(['img_path' => $path]);
        }
    }

    return redirect()->route('adminHome')->with('success', 'Design updated successfully!');
}
public function destroy(Design $design){
     foreach ($design->images as $oldImage) {
            Storage::disk('public')->delete($oldImage->img_path);
            $oldImage->delete();
        }
    $design->delete();
    return redirect()->back()->with('success', 'Design deleted successfully');

}

}