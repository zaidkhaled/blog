<?php

namespace App\Controllers\Common;

use System\Controller;

class  SidNavController extends Controller
{
    
    /**
    * Display login form
    *
    * @return mixed
    */
    
    public function index()
    {

         return $this->view->render('common/sidNav');
    }
    
  
}