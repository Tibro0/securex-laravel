<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'first_button_name' => ['required', 'max:255'],
            'first_button_url' => ['required', 'url', 'max:255'],
            'second_button_name' => ['required', 'max:255'],
            'second_button_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1920,1080);
            $img->toJpeg(80)->save(base_path('public/uploads/slider_image/'.$name_gen));
            $save_url = 'uploads/slider_image/'.$name_gen;

            $slider = new Slider();
            $slider->image = $save_url;
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->first_button_name = $request->first_button_name;
            $slider->first_button_url = $request->first_button_url;
            $slider->second_button_name = $request->second_button_name;
            $slider->second_button_url = $request->second_button_url;
            $slider->status = $request->status;
            $slider->save();
            }

        toastr()->success('Created Successfully');
        return redirect()->route('admin.slider.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:2000'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'first_button_name' => ['required', 'max:255'],
            'first_button_url' => ['required', 'url', 'max:255'],
            'second_button_name' => ['required', 'max:255'],
            'second_button_url' => ['required', 'url', 'max:255'],
            'status' => ['required'],
        ]);

        $oldImage = $request->old_image;
        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(1920,1080);
            $img->toJpeg(80)->save(base_path('public/uploads/slider_image/'.$name_gen));
            $save_url = 'uploads/slider_image/'.$name_gen;

            $slider = Slider::findOrFail($id);
            $slider->image = $save_url;
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->first_button_name = $request->first_button_name;
            $slider->first_button_url = $request->first_button_url;
            $slider->second_button_name = $request->second_button_name;
            $slider->second_button_url = $request->second_button_url;
            $slider->status = $request->status;
            $slider->save();

            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.slider.index');
        }else {
            $slider = Slider::findOrFail($id);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->first_button_name = $request->first_button_name;
            $slider->first_button_url = $request->first_button_url;
            $slider->second_button_name = $request->second_button_name;
            $slider->second_button_url = $request->second_button_url;
            $slider->status = $request->status;
            $slider->save();

            toastr()->success('Updated Successfully');
            return redirect()->route('admin.slider.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        unlink($slider->image);
        $slider->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}