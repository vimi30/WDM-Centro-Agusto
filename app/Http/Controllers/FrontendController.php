<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function index(){
   	return view('frontend.index');
   }
   public function equipo(){
   	return view('frontend.Equipo');
   }

   public function proyectos(){
   	return view('frontend.Proyectos');
   }

   public function centroaugustomijares(){
   	return view('frontend.centro_augusto_mijares');
   }
   public function semblanza(){
   	return view('frontend.semblanza');
   }

   public function eventos(){
   	return view('frontend.eventos');
   }

   public function videos(){
   	return view('frontend.videos');
   }

   /*public function after_login(){
   	return view('frontend.after_login');
   }*/

}
