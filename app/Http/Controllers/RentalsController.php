<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return all rentals
      $rentals = \App\Rental::all();
      return response()->json([ 'rentals' => $rentals]);
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
        error_log($request);

        $this->validate($request, [
          'rental' => 'required|min:3',
          'rental.title' => 'required|min:3',
          'rental.owner' => 'required|min:3',
          'rental.city' => 'required|min:3',
          'rental.type' => 'required|min:3',
          'rental.price' => 'required',
          'rental.summary' => 'required|min:3',
          'rental.emailAddress' => 'required|email',
        ]);

        $rental = new \App\Rental();
        $rental->title = $request->rental['title'];
        $rental->owner = $request->rental['owner'];
        $rental->city = $request->rental['city'];
        $rental->type = $request->rental['type'];
        $rental->price = $request->rental['price'];
        $rental->summary = $request->rental['summary'];
        $rental->emailAddress = $request->rental['emailAddress'];
        $rental->uniqid = $request->rental['uniqid'];

        if($rental->save()) {
          return response()->json(['rentals' => [$rental]], 201);
        } else {
          return response()->json(['success' => false], 401);
        }
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
      $rental = \App\Rental::find($id);
      return response()->json([ 'rental' => $rental]);
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

        error_log('IN UPDATE');
        error_log($request);
        $this->validate($request, [
          'rental' => 'required|min:3',
          'rental.title' => 'required|min:3',
          'rental.owner' => 'required|min:3',
          'rental.city' => 'required|min:3',
          'rental.type' => 'required|min:3',
          'rental.price' => 'required',
          'rental.summary' => 'required|min:3',
          'rental.emailAddress' => 'required|email',
        ]);

        $rental = \App\Rental::find($id);
        $rental->title = $request->rental['title'];
        $rental->owner = $request->rental['owner'];
        $rental->city = $request->rental['city'];
        $rental->type = $request->rental['type'];
        $rental->price = $request->rental['price'];
        $rental->summary = $request->rental['summary'];
        $rental->emailAddress = $request->rental['emailAddress'];

        if($rental->update()) {
          return response()->json(['rentals' => [$rental]], 201);
        } else {
          return response()->json(['success' => false], 401);
        }
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
      $rental = \App\Rental::find($id);
      if($rental->delete()) {
        return response()->json(['rentals' => [$rental]], 201);
      } else {
        return response()->json(['success' => false], 401);
      }
    }
}
