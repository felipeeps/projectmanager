<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projects;
use App\Http\Request\ProjectsRequest;

class ProjectsController extends Controller{

    public function index(){
        //
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){
        Projects::create($request->all());

        return redirect()->route('home');
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
