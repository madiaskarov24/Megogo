<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_src' => 'required',
            'img_alt' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'country' => 'required',
            'rating' => 'required',
            'year' => 'required',
            'type' => 'required',
            'file' => 'required',
        ]);

        $content = new Content();

        $content->title = $request->get('title');
        $content->img_src =  $request->get('file');
        $content->img_alt = $request->get('img_alt');
        $content->video_src = $request->get('video_src');
        $content->duration = $request->get('duration');
        $content->description = $request->get('description');
        $content->country = $request->get('country');
        $content->rating = $request->get('rating');
        $content->year = $request->get('year');
        $content->type = $request->get('type');

        $content->save();

        return back()->with('success', 'Content added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    public function showById($id)
    {
        //
        if (session()->get('role') != null) {
            $content = Content::where('id', $id)->first();
            return view('content.show', [
                'content' => $content
            ]);
        }
        else {
            return redirect('signup');
        }
    }

    public function showAll(Content $content) {

        $search = app('request')->input('search');
        if ($search != null) {
            $contents = $content::where('type', $search)->get();
        }

        $type = app('request')->input('type');
        if ($type != null) {
            $contents = $content::where('type', $type)->get();
        }
        else {
            $contents = $content::all();
        }
        return view('content.showAll', compact('contents'));

    }

    public function searchData(Content $content) {

        $search = app('request')->input('search');
        if ($search != null) {
            $contents = $content::where('img_alt', $search)->orWhere('img_alt', 'like', '%' . $search . '%')->get();;
        }
        else {
            $contents = $content::all();
        }
        return view('content.showAll', compact('contents'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $content = Content::find($id);
        return view('content.edit', [
            'content' => $content
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'video_src' => 'required',
            'img_alt' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'country' => 'required',
            'rating' => 'required',
            'year' => 'required',
            'type' => 'required'
        ]);

        $content = Content::find($id);

        $content->title = $request->get('title');
        $content->img_alt = $request->get('img_alt');
        $content->video_src = $request->get('video_src');
        $content->duration = $request->get('duration');
        $content->description = $request->get('description');
        $content->country = $request->get('country');
        $content->rating = $request->get('rating');
        $content->year = $request->get('year');
        $content->type = $request->get('type');

        $content->save();

        return back()->with('success', 'Content updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
