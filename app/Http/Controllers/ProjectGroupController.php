<?php

namespace App\Http\Controllers;

use App\ProjectGroup;
use Illuminate\Http\Request;

use App\Http\Requests\ProjectGroupRequest;
use App\Http\Controllers\Controller;

class ProjectGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = ProjectGroup::all();

        return view('project_group.index', [
            'project_groups'  => $projects,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $projects = ProjectGroup::all();

        return view('project_group.create', [
            'project_groups'  => $projects,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProjectGroupRequest $request)
    {
        $input = $request->all();
        $project_group = new ProjectGroup($input);


        $project_group->save();


        return redirect('project_groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}