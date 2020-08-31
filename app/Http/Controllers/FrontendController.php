<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

use App\Features;

use App\post;

use App\Category;

use App\Gpost;

use App\Inuiry;

use App\Nproduct;

use App\Fproduct;

use App\Job;

use App\Product;

use App\Pcategory;

use App\Njob;

use App\Mrp;

use App\Mrpcategory;

use Session;




class FrontendController extends Controller{
    public function index(){
      $product = Product::all();
    	return view('front.index')
    	          ->with('title', Setting::first()->site_name)
                ->with('pcategory', Pcategory::take(11)->get())
               ->with('Capsule', Pcategory::find(1))
               ->with('Liquid', Pcategory::find(2))
                ->with('Cephalosporin', Pcategory::find(3))
                ->with('Ointment', Pcategory::find(4))     
                ->with('Tablet', Pcategory::find(5))
                  ->with('fproduct', Fproduct::orderBy('created_at','desc')->take(8)->get())
                  ->with('njob', Njob::orderBy('created_at','desc')->take(1)->get())
                  ->with('settings',Setting::first());


    }

    public function news(){
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('front.news',compact('posts'))->with('title', Setting::first()->site_name)
                                                 ->with('settings',Setting::first());
      }

      public function mrp(){
        $mrp = Mrp::all();
        return view('front.mrp',compact('mrp'))
                                                 ->with('settings',Setting::first())
                                                  ->with('categories', Mrpcategory::take(11)->get())
                                                 ->with('Capsule', Mrpcategory::find(1))
                                                ->with('Liquid', Mrpcategory::find(2))
                                                ->with('Cephalosporin', Mrpcategory::find(3))
                                                ->with('Ointment', Mrpcategory::find(4))     
                                                ->with('Tablet', Mrpcategory::find(5));
      }
  
      public function newsSingle($id)
      {
        $post = Post::where('id', $id)->first();
  
        return view('front.news-single')->with('post', $post)
                                   ->with('title', $post->title)
                                   ->with('categories', Category::take(8)->get())
                                   ->with('settings',Setting::first());
  
      }

      public function gallery(){
        $gposts = Gpost::orderBy('created_at','asc')->paginate(12);
        return view('front.gallery',compact('gposts'));
       
      }

      public function vacancy(){
        $job = Job::orderBy('created_at','asc')->paginate(12);
        return view('front.job',compact('job'));
       
      }

      public function new_product(){
        $nproduct = Nproduct::orderBy('created_at','asc')->paginate(12);
        return view('front.new_product',compact('nproduct'));
       
      }




      public function product(){
        $product = Product::all();
        return view('front.product',compact('product'))
                                                 ->with('settings',Setting::first())
                                                  ->with('pcategory', Pcategory::take(11)->get())
                                                 ->with('Capsule', Pcategory::find(1))
                                                ->with('Liquid', Pcategory::find(2))
                                                ->with('Cephalosporin', Pcategory::find(3))
                                                ->with('Ointment', Pcategory::find(4))     
                                                ->with('Tablet', Pcategory::find(5));
      }


      public function inquirystore(Request $request){
  
         $inuiry = Inuiry::create([
             'name' => $request->name,
              'lname' => $request->lname,
              'email' => $request->email,
              'phone' => $request->phone,
              'msg' => $request->msg,
              'service' => $request->service,
  
  
          ]);   
  
          Session::flash('success', 'Thanks for inuiry, we will contact you soon.');
  
          return redirect()->route('index');
  
       }
  


}
