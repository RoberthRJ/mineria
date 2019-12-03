<?php

namespace App\Http\Controllers;

use App\Location;
use App\Offert;
use Illuminate\Http\Request;

class OffertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offerts = Offert::latest()->paginate(12);

        return view('offert.index', compact('offerts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list(Request $request){
        // dd($request['category_id']);
        $offerts = Offert::where('category_id', $request['category_id'])->where('company_id', $request['location'])
                            ->paginate(12);

        dd($offerts);

        return view('offert.index', compact('offerts'));
    }

    public function location(Location $location){

        $offerts = Offert::whereLocationId($location->id)->paginate(12);

        return view('offert.index', compact('offerts'));
    }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offert $offert )
    {
        $offert->load([
            'company' => function ($q) {
                $q->select('id', 'user_id', 'title', 'website', 'biography');
            },
            'company.user'
        ])->get();

        $related = $offert->relatedOfferts();

        return view('offert.show', compact('offert', 'related'));
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
        //
    }
}
