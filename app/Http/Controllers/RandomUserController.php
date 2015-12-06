<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

require_once '/app/vendor/fzaninotto/faker/src/autoload.php';

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('random_user')->with('title', 'Random User');
    }

    /**
     * Generate paragraphs of lorem ipsum text
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function random_user(Request $request)
    {
      // Validate the request data
      $this->validate($request, [
          'numberOfUsers' => 'required|max:99|integer',
      ]);

      // factory for Faker
      $faker = \Faker\Factory::create();

      // number of users to generate
      $num = intval($request['numberOfUsers']);

      // array to hold users
      $users = array();

      // generate users
      for ($i = 0; $i < $num; $i++) {

        $user = array();

        // generate users
        $name = $faker->name;
        $user['name'] = $name;

        // birthdates
        if ($request['includeBirthdate']) {
          $user['birthdate'] = $faker->dateTimeThisCentury->format('Y-m-d');
        }

        // profile
        if ($request['includeProfile']) {
          $user['profile'] = $faker->text;
        }

        // add User to users
        $users[] = $user;
      }

      return view('random_user')->with('users', $users);
    }

  }
