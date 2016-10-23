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
        $HowManyUsers = $request->input('HowManyUsers');
        
       
        #Validate the request here



        #Logic to obtain users
        $faker = \Faker\Factory::create();
                   

        #Display the results
        Return view('usershow')
            ->with('faker', $faker)
            ->with('HowManyUsers', $HowManyUsers);
            
    }
       
}

