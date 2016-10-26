<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Badcow\LoremIpsum;

class IpsumController extends Controller
{
   
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        return view('ipsum');
    }


    public function store(Request $request)   
    {
        
        #Validate the request after submit
        $this->validate($request, [
        'HowManyParagraphs' => 'required|numeric|min:1|max:10',
        ]);

        # Obtaining data from form
        $HowManyParagraphs = $request->input('HowManyParagraphs');
        
        #Logic to obtain paragraphs
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($HowManyParagraphs);
        
        #Display the results
        Return view('ipsumshow')->with('paragraphs', $paragraphs);
            
    }
       
}
