<?php

namespace App\Http\Controllers\Admin;

use App\Tourist;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourists = Tourist::orderBy('id')->get();

        return view('admin.tourist.index', compact('tourists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tourist.create');
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'birthday' => 'required',
        ]);

        $tourist = new Tourist();
        $tourist->first_name = $request->get('first_name');
        $tourist->last_name = $request->get('last_name');
        $tourist->birthday = $request->get('birthday');
        $tourist->created_at = Carbon::now();
        $tourist->save();
        return redirect('admin/tourist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourist = Tourist::where('id', $id)->first();

        return view('admin.tourist.show', compact('tourist'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourist = Tourist ::where('id', $id)->first();

        return view('admin.tourist.edit', compact('tourist'));
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
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'birthday' => 'required',
        ]);

        $tourist  = Tourist::where('id', $id)->first();
        $tourist->first_name = $request->get('first_name');
        $tourist->last_name = $request->get('last_name');
        $tourist->birthday = $request->get('birthday');
        $tourist->updated_at = Carbon::now();
        $tourist->save();

        return redirect('admin/tourist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tourist::where('id', $id)->delete();
        return redirect()->back();
    }

    public function touristsList()
    {
        $tourists = Tourist::get();
        foreach ($tourists as $tourist) {
            $tourist ->number = $tourist->city->count();
        }

        return view('admin.tourist.list', compact('tourists'));
    }
}
