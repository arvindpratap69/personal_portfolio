<?php

namespace App\Http\Controllers\admin;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    function admin_home()
    {
        // echo "Home page";
        // die;
        // Retrieve all records from the 'homes' table
        $homes = Home::all();
        $data['homes'] = $homes;

        return view('admin.home.list', $data);
    }

    // Home page view and stroing content start --------------------------------------------------------------------------------------------------------------------
    function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'count_projects' => 'required',
            'experince' => 'required',
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile')) {
            $image = $request->file('profile');

            // Define the path to store the image
            $path = public_path('storage/uploads/home_images/');
            if (!File::exists($path)) {
                File::makeDirectory($path, 0777, true, true); // Ensure the directory exists
            }

            // Resize the image
            $resizedImage = Image::make($image)->resize(800, 864, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Generate a unique file name
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            // Save the resized image to the public path
            $resizedImage->save($path . $imageName);

            // Save form data and image path in database
            $home = new Home();
            $home->name = $request->name;
            $home->role = $request->role;
            $home->description = $request->description;
            $home->count_projects = $request->count_projects;
            $home->experince = $request->experince;
            $home->image = 'storage/uploads/home_images/' . $imageName;
            $home->save();

            return redirect()->route('admin.home')->with('success', "Added Successfully");
        }

        return redirect()->back()->withInput()->withErrors($validator);
    }
    // Home page view and stroing content end----------------------------------------------------------------------------------------------------------

    // Home page edit view page  and Editing  start-----------------------------------------------------------------------------------------------------

    public function edit($id)
    {
        $homes = Home::find($id);
        $data['homes'] = $homes;
        if (!$homes) {
            return redirect()->back()->with('error', 'Home page id not found your database');
        }
        return view('admin.home.edift', $data);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'count_projects' => 'required',
            'experince' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // 'nullable' allows empty files
        ]);

        if ($validator->passes()) {


            $homes = Home::find($id);

            if ($request->hasFile('profile')) {
                $image = $request->file('profile');

                // Define the path to store the image
                $path = public_path('storage/uploads/home_images/');
                if (!File::exists($path)) {
                    File::makeDirectory($path, 0777, true, true); // Ensure the directory exists
                }

                // Resize the image
                $resizedImage = Image::make($image)->resize(800, 864, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Generate a unique file name
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

                // Save the resized image to the public path
                $resizedImage->save($path . $imageName);

                // Delete the old image if it exists
                if (!empty($homes->image) && file_exists(public_path($homes->image))) {
                    unlink(public_path($homes->image));
                }

                // Update the image path
                $homes->image = 'storage/uploads/home_images/' . $imageName;
            }

            // Update other fields
            $homes->name = trim($request->name);
            $homes->role = trim($request->role);
            $homes->description = trim($request->description);
            $homes->count_projects = trim($request->count_projects);
            $homes->experince = trim($request->experince);
            $homes->save();

            return redirect()->route('admin.home')->with('success', "Updated Successfully");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    // Home page edit view page  and Editing end----------------------------------------------------------------------------------------------------------

    //   Delete Home page content function
    public function deleteHome(Request $request, $id)
    {
        $home = Home::find($id);

        if (!$home) {
            session()->flash('error', 'Home record Not Found In Your Database');
        } else {
            // $imagePath = public_path('storage/uploads/home_images/' . $home->image); // Check this
            $imagePath = public_path($home->image);
            // dd($imagePath, File::exists($imagePath)); // Check path and file existence

            if (File::exists($imagePath)) {
                File::delete($imagePath); // Delete the file
            }

            $home->delete();
            session()->flash('success', 'Home record Deleted Successfully');
        }

        return redirect()->route('admin.home');
    }
}
