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
    public function index(Design $design){
        $designs = Design::with('images')->get();
        return view('admin.index', compact('designs'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $design = Design::create(collect($validated)->except('img_path')->toArray());

        if ($request->hasFile('img_path')) {
            foreach ($request->file('img_path') as $file) {
                // Changed to 's3' and added public visibility
                $path = $file->store('designs', 's3');

                $design->images()->create([
                    'img_path' => $path
                ]);
            }
        }

        return redirect()->route('adminHome')->with('success', 'Design created Successfully');
    }

    public function edit(Design $design){
        $categories = ['Gowns', 'Two-Piece', 'Wedding-Attire', 'Dinner-Wear'];
        return view('admin.edit', compact('design', 'categories'));
    }

    public function update(UpdateRequest $request, Design $design)
    {
        $validated = $request->validated();
        $design->update(collect($validated)->except('img_path')->toArray());

        if ($request->hasFile('img_path')) {
            
            // FIXED: Delete from 's3' instead of 'public'
            foreach ($design->images as $oldImage) {
                Storage::disk('s3')->delete($oldImage->img_path);
                $oldImage->delete();
            }

            // FIXED: Upload to 's3' instead of 'public'
            foreach ($request->file('img_path') as $file) {
                $path = $file->store('designs', 's3');
                $design->images()->create(['img_path' => $path]);
            }
        }

        return redirect()->route('adminHome')->with('success', 'Design updated successfully!');
    }

    public function destroy(Design $design){
        // FIXED: Delete from 's3' instead of 'public'
        foreach ($design->images as $oldImage) {
            Storage::disk('s3')->delete($oldImage->img_path);
            $oldImage->delete();
        }
        
        $design->delete();
        return redirect()->back()->with('success', 'Design deleted successfully');
    }
}