<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Review;
use App\Models\Section;
use App\Models\Setting;
use App\Models\Traffic;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Str;

class SettingController extends Controller
{
    function index() {
        $traffic = Traffic::orderByDesc('id')->get();
        return view('admin.index', compact('traffic'));
    }
    
    public function profile()
    {
        return view('admin.profile');
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if($request->password != null){
            $user->password = Hash::make($request->password);        
        }
        $user->save();
        return redirect()->route('admin.profile')->withSuccess(__("Profile updated successfully"));
    }

    //settings page
    function settings() {

        return view('admin.settings');
    } 

    function update_settings(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('favicon')){
            $image = $request->file('favicon');

            $imageName = 'favicon.png';
            $image->move(public_path('uploads'),$imageName);
           
            $input['favicon'] =$imageName;
        }

        if($request->hasFile('logo')){
            $image = $request->file('logo');

            $imageName = 'logo.png';
            $image->move(public_path('uploads'),$imageName);
           
            $input['logo'] =$imageName;
        }
        $setting = Setting::first();
        $setting->update($input);

        return redirect()->back()->withSuccess(__('Settings Updated Successfully.'));
    }

    // email settings
    function email_settings()
    {
        return view('admin.email');
    }

    function update_email_settings(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }
        return back()->withSuccess(__("Settings updated successfully"));
       
    }
    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                    $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                ));
            }
            else{
                file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
            }
        }
    }
    // projets
    function projects ()
    {
        $projects = Project::all();
        return view('admin.projects', compact('projects'));
    }
    function create_project (Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->link = $request->link;
        $project->category = $request->category;
        // 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'projects/'.Str::slug($request->name).'.jpg';
            $image->move(public_path('uploads/projects'),$imageName);
           
            $project->image =$imageName;
        }
        $project->save();
        return redirect()->route('admin.projects')->withSuccess("Project Created successfully");
    }
    function update_project (Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->name = $request->name;
        $project->link = $request->link;
        $project->category = $request->category;
        // 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'projects/'.Str::slug($request->name).'.jpg';
            $image->move(public_path('uploads/projects'),$imageName);
           
            $project->image =$imageName;
        }
        $project->save();
        return redirect()->route('admin.projects')->withSuccess("Project Created successfully");
    }
    function delete_project($id)
    {
        $project = Project::findOrFail($id);
        // remove project image
        if($project->image != null){
            try {
                unlink(public_path('uploads/'.$project->image));
            } catch (\Throwable $th) {
                //throw $th;
            }                    
        }
        $project->delete();
        return redirect()->route('admin.projects')->withSuccess('Project was deleted.');
    }

    // reviews
    function reviews ()
    {
        $reviews = Review::all();
        return view('admin.review', compact('reviews'));
    }
    function create_review (Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->position = $request->position;
        $review->message = $request->message;
        // 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'reviews/'.Str::slug($request->name).'.jpg';
            $image->move(public_path('uploads/reviews'),$imageName);
           
            $review->image =$imageName;
        }
        $review->save();
        return redirect()->route('admin.review')->withSuccess("Review Created successfully");
    }
    function update_review (Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->name = $request->name;
        $review->position = $request->position;
        $review->message = $request->message;
        // 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'reviews/'.Str::slug($request->name).'.jpg';
            $image->move(public_path('uploads/reviews'),$imageName);
           
            $review->image =$imageName;
        }
        $review->save();
        return redirect()->route('admin.review')->withSuccess("Reviews was updated");
    }
    function delete_review($id)
    {
        $review = Review::findOrFail($id);
        // remove review image
        if($review->image != null){
            try {
                unlink(public_path('uploads/'.$review->image));
            } catch (\Throwable $th) {
                //throw $th;
            }                    
        }
        $review->delete();
        return redirect()->route('admin.review')->withSuccess('Review was deleted.');
    }

    function contacts ()
    {
        $contacts = Contact::orderByDesc('id')->get();
        return view('admin.contact', compact('contacts'));
    }

    // Sections
    function about_section()
    {
        return view('admin.section.about');
    }
    function why_section()
    {
        return view('admin.section.why');
    }
    function service_section()
    {
        return view('admin.section.service');
    }
    function banner_section()
    {
        return view('admin.section.banner');
    }
    function faq_section()
    {
        return view('admin.section.faq');
    }

    function update_section (Request $request)
    {
        $input = $request->all();

        $data = Section::first();
        $data->update($input);

        return redirect()->back()->withSuccess(__('Settings Updated Successfully.'));
    }
}
