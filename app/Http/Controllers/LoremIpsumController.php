<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoremIpsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('lorem_ipsum')->with('title', 'Lorem Ipsum');
    }

    /**
     * Generate paragraphs of lorem ipsum text
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lorem_ipsum(Request $request)
    {
      // Validate the request data
      $this->validate($request, [
          'numberOfParagraphs' => 'required|max:99|integer',
      ]);

      $num = intval($request['numberOfParagraphs']);
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($num);

      return view('lorem_ipsum')->with('paragraphs', $paragraphs);
    }

  }
