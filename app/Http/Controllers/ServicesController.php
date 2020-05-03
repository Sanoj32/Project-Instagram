<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service()
    {
        $data = array(
            'title'=>'This is a title',
            'services' => ['Web design' , 'Sql' , 'Php' , 'Laravel'],

    );
        return view('services')->with($data);
    }
    public function about()
    {
        return view('footer.about');
    }
}
