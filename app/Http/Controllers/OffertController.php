<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\EmailRequest;
use App\Location;
use App\Mail\NewPostulation;
use App\Offert;
use App\Postulation;
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
                $q->select('id', 'user_id', 'title', 'website', 'biography', 'slug');
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

    public function mail(Offert $offert, EmailRequest $request)
    {
        $cv = Helper::uploadFile('file', 'files');
        $request->merge(['cv' => $cv]);
        $request->merge(['offert_id' => $offert['id']]);
        Postulation::create($request->input());

        \Mail::to('sistem@mail.com')->send(new NewPostulation($offert, $request));

        return back()->with('status', 'Has postulado correctamente');
    }
}
