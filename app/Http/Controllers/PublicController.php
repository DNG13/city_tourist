<?php

namespace App\Http\Controllers;

use App\Tourist;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourists = Tourist::get();
        foreach ($tourists as $tourist) {
            $tourist->cities = '';
            $coma = false;
            foreach ($tourist->city as $cities) {
                $tourist->cities .= ($coma ? ', ' : '') . $cities->name . '(' . $cities->country .')';
                $coma = true;
            }
        }
        return view('public.list', compact('tourists'));
    }
}
