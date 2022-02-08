<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function support(){

        return view('pages.support');

    }


    public function permission(){

        return view('pages.permission');

    }


    public function reporting(){

        return view('pages.reporting');

    }

    public function Users(){

        return view('pages.user.Users');

    }

    public function adduser(){

        return view('pages.user.adduser');

    }



    public function financial(){

        return view('pages.Financial');

    }


    public function Emailcompose(){

        return view('pages.email.compose');

    }

    public function Emailread(){

        return view('pages.email.read');

    }

    public function Emailinbox(){

        return view('pages.email.inbox');

    }

    public function services(){

        return view('pages.services');

    }


    public function opportunities(){

        return view('pages.opportunities');

    }


    public function posts(){

        return view('pages.post.posts');

    }

    public function addpost(){

        return view('pages.post.addpost');

    }


    public function chat(){

        return view('pages.chat');

    }


  


}
