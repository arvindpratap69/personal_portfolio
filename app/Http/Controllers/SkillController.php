<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Termwind\Components\Raw;
use Illuminate\Auth\Events\Validated;

use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\returnSelf;

class SkillController extends Controller
{
    public function admin_skills()
    {
        $skills = Skill::all();
        $data['skills'] = $skills;
        return view('admin.skill.list', $data);
    }

    // Storing the skills feauters and view the list page start
    public function create()
    {
        return view('admin.skill.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'skill_name' => 'required',
            'proficiency' => ['required', 'regex:/^\d{1,3}%?$/'],

        ]);
        if ($validator->passes()) {
            // dd($request->all());
            $skill = new Skill();
            $skill->skill_name = trim($request->skill_name);
            $skill->proficiency  = trim($request->proficiency);
            $skill->save();
            return redirect()->route('admin.skills')->with('success', 'Added Successfully');
        } else {

            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    // Storing the skills feauters and view the list page end

    // updating the skills feauters and view the list page start
    public function edit($id)
    {
        $skill = Skill::find($id);
        $data['skill'] = $skill;
        return view('admin.skill.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'skill_name' => 'required',
            'proficiency' => ['required', 'regex:/^\d{1,3}%?$/'],

        ]);
        $skill = Skill::find($id);

        if (!$skill) {
            session()->flash('error', 'Home record Not Found In Your Database');
        }

        if ($validator->passes()) {
            // dd($request->all());

            $skill->skill_name = trim($request->skill_name);
            $skill->proficiency  = trim($request->proficiency);
            $skill->save();
            return redirect()->route('admin.skills')->with('success', 'Updated Successfully');
        } else {

            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    // updating the skills feauters and view the list page start

    public function deleteSkill(Request $request, $id)
    {
        $skill = Skill::find($id);

        if (!$skill) {
            session()->flash('error', 'Home record Not Found In Your Database');
        } else {
            $skill->delete();
            session()->flash('success', 'Home record Deleted Successfully');
        }

        return redirect()->route('admin.skills');
    }
}
