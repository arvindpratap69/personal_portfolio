<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\File;
// use Illuminate\Validation\Rules\Exists;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    function admin_about()
    {
        $abouts = About::all();
        $data['abouts'] = $abouts;
        return view('admin.about.list', $data);
    }
    public function create()
    {
        return view('admin.about.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'subtitle' => 'required',
            'title' => 'required',
        ]);

        if ($validator->passes()) {
            $adminImageName = null;
            $imageName = null;
            $icon1Name = null;
            $icon2Name = null;
            $icon3Name = null;

            if ($request->hasFile('profile')) {
                $adminImage = $request->file('profile');
                $path = public_path('storage/uploads/about_images/admin_image/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $resizeImage = Image::make($adminImage)->resize(800, 652, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $adminImageName = uniqid() . '.' . $adminImage->getClientOriginalExtension();
                $resizeImage->save($path . $adminImageName);
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = public_path('storage/uploads/about_images/images/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $resizeImage = Image::make($image)->resize(800, 717, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $resizeImage->save($path . $imageName);
            }

            $abouts = new About();
            $abouts->admin_image = 'storage/uploads/about_images/admin_image/' . $adminImageName;
            $abouts->image = 'storage/uploads/about_images/images/' . $imageName;
            $abouts->icon_1 = trim($request->icon1);
            $abouts->icon_2 = trim($request->icon2);
            $abouts->icon_3 = trim($request->icon3);
            $abouts->subtitle = trim($request->subtitle);
            $abouts->title = trim($request->title);
            $abouts->short_description = trim($request->short_description);
            $abouts->long_description = trim($request->long_description);
            $abouts->save();

            return redirect()->route('admin.about')->with('success', 'Added Successfully');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    public function edit(Request $request, $id)
    {
        $about = About::find($id);
        $data['about'] = $about;
        return view('admin.about.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'subtitle' => 'required',
            'title' => 'required',
        ]);

        $abouts = About::find($id);
        if ($validator->passes()) {
            if ($request->hasFile('profile')) {
                $adminImage = $request->file('profile');
                $path = public_path('storage/uploads/about_images/admin_image/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $resizeImage = Image::make($adminImage)->resize(800, 652, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $adminImageName = uniqid() . '.' . $adminImage->getClientOriginalExtension();
                $resizeImage->save($path . $adminImageName);
                // Delete the old image if it exists
                if (!empty($abouts->admin_image) && file_exists(public_path($abouts->admin_image))) {
                    unlink(public_path($abouts->admin_image));
                }
                $abouts->admin_image = 'storage/uploads/about_images/admin_image/' . $adminImageName;
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $path = public_path('storage/uploads/about_images/images/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $resizeImage = Image::make($image)->resize(800, 717, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $resizeImage->save($path . $imageName);
                // Delete the old image if it exists
                if (!empty($abouts->image) && file_exists(public_path($abouts->image))) {
                    unlink(public_path($abouts->image));
                }

                // save the image from database 
                $abouts->image = 'storage/uploads/about_images/images/' . $imageName;
            }
            $abouts->icon_1 = trim($request->icon1);
            $abouts->icon_2 = trim($request->icon2);
            $abouts->icon_3 = trim($request->icon3);
            $abouts->subtitle = trim($request->subtitle);
            $abouts->title = trim($request->title);
            $abouts->short_description = trim($request->short_description);
            $abouts->long_description = trim($request->long_description);
            $abouts->save();

            return redirect()->route('admin.about')->with('success', 'Updated Successfully');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    //   Delete About page content function
    public function deleteAbout(Request $request, $id)
    {
        $about = About::find($id);

        if (!$about) {
            session()->flash('error', 'Home record Not Found In Your Database');
        } else {
            // $imagePath = public_path('storage/uploads/home_images/' . $home->image); // Check this
            $adminImage = public_path($about->admin_image);
            $image = public_path($about->image);
            // dd($imagePath, File::exists($imagePath)); // Check path and file existence

            if (File::exists($adminImage)) {
                File::delete($adminImage); // Delete the file
            }
            if (File::exists($image)) {
                File::delete($image); // Delete the file
            }

            $about->delete();
            session()->flash('success', 'Home record Deleted Successfully');
        }

        return redirect()->route('admin.home');
    }
}
