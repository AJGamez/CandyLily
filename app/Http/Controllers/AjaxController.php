<?php
namespace CandyLily\Http\Controllers;
use Illuminate\Http\Request;
use CandyLily\Http\Requests;
use CandyLily\Http\Controllers\Controller;

class AjaxController extends Controller {
   public function index(){
      $msg = "This is a simple message.";
      return response()->json(array('msg'=> $msg), 200);
   }
}