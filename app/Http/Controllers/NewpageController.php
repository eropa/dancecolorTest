<?php

namespace App\Http\Controllers;

use App\Models\Newpage;
use App\Services\NewpageServices;
use Illuminate\Http\Request;

class NewpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewpageServices $services)
    {
        $datas=$services->SelestAll();
        return view('index',['datas'=>$datas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,NewpageServices $services)
    {
        $idrecord=$services->InsertRecord($request->all());
        return redirect('/'.$idrecord);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newpage  $newpage
     * @return \Illuminate\Http\Response
     */
    public function show($idnew=0,NewpageServices $services)
    {
        $data=$services->SelectId($idnew);

        return view('shownew',['data'=>$data]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newpage  $newpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Newpage $newpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newpage  $newpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newpage $newpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newpage  $newpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newpage $newpage)
    {
        //
    }
}
