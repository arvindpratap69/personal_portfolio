<?php

namespace App\Http\Controllers\admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    function admin_portfolio()
    {
        $portfolios = Portfolio::all();
        $data['portfolios'] = $portfolios;

        return view('admin.portfolio.list', $data);
    }
    public function create()
    {
        return view('admin.portfolio.create');
    }

    // Storing the portfolio content start
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'subtitle' => 'required',
            'title' => 'required',
            'project_url' => 'required|url',
        ]);
        if ($validator->passes()) {
            // dd($request->all());
            if ($validator->passes()) {
                if ($request->hasFile('image_path')) {
                    $portfolioImage = $request->file('image_path');
                    $path = public_path('storage/uploads/portfolio_image/');
                    if (!File::exists($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }
                    $resizeImage = Image::make($portfolioImage)->resize(987, 555, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $portfolioImageName = uniqid() . '.' . $portfolioImage->getClientOriginalExtension();
                    $resizeImage->save($path . $portfolioImageName);
                    // Delete the old image if it exists
                    // if (!empty($abouts->admin_image) && file_exists(public_path($abouts->admin_image))) {
                    //     unlink(public_path($abouts->admin_image));
                    // }
                }
                $portfolio = new Portfolio();
                $portfolio->title = trim($request->title);
                $portfolio->subtitle = trim($request->subtitle);
                $portfolio->project_url = trim($request->project_url);
                $portfolio->image_path = 'storage/uploads/portfolio_image/' . $portfolioImageName;
                $portfolio->save();

                return redirect()->route('admin.portfolio')->with('success', 'Added Successfullly');
            } else {
                return redirect()->back()->withInput()->withErrors($validator);
            }
        }
    }
    // Storing the portfolio content end

    // updating  the portfolio content start
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        $data['portfolio'] = $portfolio;
        return view('admin.portfolio.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'subtitle' => 'required',
            'title' => 'required',
            'project_url' => 'required|url',
        ]);
        if ($validator->passes()) {
            // dd($request->all());

            $portfolio = Portfolio::find($id);
            if ($validator->passes()) {
                if ($request->hasFile('image_path')) {
                    $portfolioImage = $request->file('image_path');
                    $path = public_path('storage/uploads/portfolio_image/');
                    if (!File::exists($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }
                    $resizeImage = Image::make($portfolioImage)->resize(987, 555, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $portfolioImageName = uniqid() . '.' . $portfolioImage->getClientOriginalExtension();
                    $resizeImage->save($path . $portfolioImageName);
                    // Delete the old image if it exists
                    if (!empty($portfolio->image_path) && file_exists(public_path($portfolio->image_path))) {
                        unlink(public_path($portfolio->image_path));
                    }
                    $portfolio->image_path = 'storage/uploads/portfolio_image/' . $portfolioImageName;
                }

                $portfolio->title = trim($request->title);
                $portfolio->subtitle = trim($request->subtitle);
                $portfolio->project_url = trim($request->project_url);
                $portfolio->save();

                return redirect()->route('admin.portfolio')->with('success', 'Updated Successfullly');
            } else {
                return redirect()->back()->withInput()->withErrors($validator);
            }
        }
    }

    // updating the portfolio content end


    // Deleting the Portoflio data from database and public image 
    public function deletePortfolio(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);

        if (!$portfolio) {
            session()->flash('error', 'Home record Not Found In Your Database');
        } else {
            // $imagePath = public_path('storage/uploads/home_images/' . $home->image); // Check this
            $portfolioImage = public_path($portfolio->image_path);
            // dd($imagePath, File::exists($imagePath)); // Check path and file existence

            if (File::exists($portfolioImage)) {
                File::delete($portfolioImage); // Delete the file
            }

            $portfolio->delete();
            session()->flash('success', 'Home record Deleted Successfully');
        }

        return redirect()->route('admin.portfolio');
    }
}
