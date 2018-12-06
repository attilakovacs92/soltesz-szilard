<?php

namespace App\Http\Controllers\Admin;

use App\Date;
use Carbon\Carbon;
use App\Training;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();

        return ( view('admin.trainings.index', compact('trainings')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'required',
            'description'   => 'required',
            'image_path'      => 'required',
            'started_at'    => 'required',
            'expired_at'    => 'required'
        ]);

        $format = $request->image_path->getClientOriginalExtension();

        $training = Training::create([
            'slug'          => str_slug($request->title),
            'title'         => $request->title,
            'description'   => $request->description,
            'locale'        => $request->locale,
            'image_path'    => 'images/trainings/' .str_slug($request->title) . '.' . $format,
            'price'         => $request->price,
            'max_person'    => $request->max_person
        ]);

        $this->imageUpload($request->all());

        Date::create([
            'training_id'   => $training->id,
            'started_at'    => $request->started_at,
            'expired_at'    => $request->expired_at
        ]);

        return back()->with('success', 'Sikeresen felvetted az új eseményt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::find($id);

        $training->delete();

        return back()->with('success', 'Sikeresen törölted az eseményt!');
    }

    /**
     * imageUpload
     *
     * @param mixed $request
     */
    public function imageUpload($request)
    {
        $image = $request['image_path'];

        $input['images_name'] = str_slug($request['title']) . '.' . $image->getClientOriginalExtension();

        $destinationPath = storage_path('app/public/images/trainings');

        return $image->move($destinationPath, $input['images_name']);
    }

}