<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use App\Models\Notification;
use App\http\Requests\TestimonialRequest;
use App\Models\Tbl_Offier;
use Session;
class Home extends Controller
{
    //Home View
    function default(){
        $slider=Slider::OrderBy('id','desc')->get();
        $testi=Testimonial::where(['status'=>'Approve'])->OrderBy('id','desc')->get();
        $news=Notification::OrderBy('id','desc')->get();

        return view('Home.main',['simage'=>$slider,'testdata'=>$testi,'news'=>$news]);
    }
    //About View
    function about(){
        return view('Home.about');
    }

    //contact view
    function contact(){
        $officer=Tbl_Offier::where(['enddate'=>'Present'])->OrderBy('id','desc')->get();
        return view('Home.contact',['officerdata'=>$officer]);
    }

    //Add subscriber
    function subscriber(SubscriberRequest $res){
        $name=$res->get('name');
        $email=$res->get('email');
        $sub=new Subscriber();
        $sub->name=$name;
        $sub->email=$email;
        if($sub->save()){
            Session::flash('succMsg','Thank you for subscribing');
            return redirect('/');
        }
        else{
            Session::flash('errMsg','Server Error');
            return redirect('/');
        }
    }
    //add feedback
    function addfeedback(TestimonialRequest $res){
        $name=$res->get('name');
        $file=$res->file('file');
        $message=$res->get('message');
        $status='Pending';
        $fname=$name.rand().".".$file->extension();
        $desfolder=public_path('/testimonial');
        if($file->move($desfolder,$fname)){
            $testi=new Testimonial();
            $testi->name=$name;
            $testi->profile=$fname;
            $testi->message=$message;
            $testi->status=$status;
            if($testi->save()){
                Session::flash("succMsg",'Testimonial is successfully added');
                return redirect('/'); 
            }
            else{
                Session::flash('errmsg','Testimonial not added');
                return redirect('/');
            }
        }
    }
}
