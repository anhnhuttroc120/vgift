<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
   public function create(Request $rq) 
   {
  
   	$files = $rq->file('picture');
echo '<pre>';
print_r($files);
echo '</pre>';
  
   }	
}
