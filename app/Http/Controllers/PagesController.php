<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function about(){

        //FIRST OPTION
        //$name = 'Rog';
        //return view('pages.about')->with('name', $name);

        //SECOND OPTION
//        return view('pages.about')->with([
//            'first' => 'Rog',
//            'last'  => 'Rogson'
//        ]);

        //THIRD OPTION
//        $data = [];
//        $data['first']  = 'Lar';
//        $data['last']   = 'Larson';
//
//        return view('pages.about', $data);

        //FOURTH OPTION

        $first = 'Steve';
        $last  = 'Stevenson';
		return view('pages.about', compact('first', 'last'));
	}

    public function contact(){
        return view('pages.contact');
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
