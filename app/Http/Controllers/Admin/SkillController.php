<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use App\Services\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct(private SkillService $skillService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills=Skill::all();
        return view('admin.skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        $this->skillService->store($request->validated());
        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
       return view('admin.skill.show',compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
      return view('admin.skill.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $this->skillService->update($skill,$request->validated());
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $this->skillService->destroy($skill);
        return redirect()->route('skill.index');
    }
}
