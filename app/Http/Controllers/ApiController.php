<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class ApiController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return City::all();
    }

    /**
     * @param City $city
     * @return City
     */
    public function show(City $city)
    {
        return $city;
    }

    /**
     * @param Request $request
     * @param City $city
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        return response()->json($city, 200);
    }

    /**
     * @param City $city
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(City $city)
    {
        $city->delete();

        return response()->json(null, 204);
    }

}
