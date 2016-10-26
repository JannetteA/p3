<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Faker\Factory;

class UserController extends Controller
{

     /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        return view('user');
    }


    public function store(Request $request)   
    {
        
        #Validate the request after submit
        $this->validate($request, [
        'HowManyUsers' => 'required|numeric|min:1|max:20',
        ]);

        # Obtaining data from form
        $HowManyUsers = $request->input('HowManyUsers');
       
        #Logic to obtain users
        $faker = \Faker\Factory::create();
                   
        #Display the results
        Return view('usershow')
            ->with('faker', $faker)
            ->with('HowManyUsers', $HowManyUsers);
    }
       
}

