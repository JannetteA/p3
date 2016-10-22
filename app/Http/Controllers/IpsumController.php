<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \joshtronic\LoremIpsum;

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
        $HowManyParagraphs = $request->input('HowManyParagraphs');
        #$HowManyParagraphs = $_POST['HowManyParagraphs'];


        #Validate the request here


        #Logic to obtain paragraphs
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($HowManyParagraphs);
        

        #Display the results
        Return view('ipsumshow')->with('paragraphs', $paragraphs);
            
    }
       
}
