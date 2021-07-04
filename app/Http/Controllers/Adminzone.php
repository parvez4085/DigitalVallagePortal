<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminloginRequest;
use App\Models\Admin;
use App\Http\Requests\SilderRequest;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;
use App\Models\Notification;
use App\Http\Requests\BreakingnewsRequest;
use App\Models\Tbl_Offier;
use App\Http\Requests\OfficerRequest;
use Session;

class Adminzone extends Controller
{
    //
    //
    function adminlogin()
    {
        return view('admin.login');
    }
    //Admin login
    function loginpost(AdminloginRequest $req)
    {
        $email = $req->get('email');
        $password = sha1($req->get('password'));
        $data = Admin::where(['email' => $email, 'password' => $password])->get();
        if (count($data) > 0) {
            Session::put('aid', $email);
            return redirect('/admin/dashboard');
        } else {
            Session::flash('errMsg', 'Email or password is not correct');
            return redirect('/admin');
        }
    }
    //Dashboard view
    function dashboard()
    {
        return view('Admin.dashboard');
    }
    //Logout
    function logout()
    {
        Session::flush();
        return redirect('/admin');
    }
    //Add Silder
    function addslider()
    {
        $slider = Slider::orderBy('id', 'asc')->get();
        return view('admin.add-slider', ['simage' => $slider]);
    }

    //Update Slider
    function updateslider($id)
    {
        $slider = Slider::where('id', $id)->first();
        return view('admin.updateslider')->with('slider', $slider);
    }
    //Updated Slider Post
    function newslider(SilderRequest $res)
    {
        $id = $res->get('id');
        $title = $res->get('title');
        $file = $res->file('slider');
        $fname = rand() . "." . $file->extension();
        $desfolder = public_path('/slider');
        if ($file->move($desfolder, $fname)) {
            $simage = new Slider();
            $simage->title = $title;
            $simage->slider_image = $fname;
            if ($simage->save()) {
                Session::flash("succMsg", 'Slider image added successfully');
                return redirect('admin/addslider');
            } else {
                Session::flash('errmsg', 'Slider image not added');
                return redirect('admin/addslider');
            }
        }
    }
    //testimonial/feedback विवरण view
    function testimonial()
    {
        $testi = Testimonial::OrderBy('id', 'desc')->get();
        return view('admin.testimonial', ['testi' => $testi]);
    }
    //Inset testimonial
    function addtestimonial(TestimonialRequest $res)
    {
        $name = $res->get('name');
        $file = $res->file('file');
        $message = $res->get('message');
        $fname = $name . rand() . "." . $file->extension();
        $desfolder = public_path('/testimonial');
        if ($file->move($desfolder, $fname)) {
            $testi = new Testimonial();
            $testi->name = $name;
            $testi->profile = $fname;
            $testi->message = $message;
            if ($testi->save()) {
                Session::flash("succMsg", 'Testimonial is successfully added');
                return redirect('admin/testimonial');
            } else {
                Session::flash('errmsg', 'Testimonial not added');
                return redirect('admin/testimonial');
            }
        }
    }
    //Update Testimonial Status
    function testimonialstatus($id, $status)
    {
        $testi = testimonial::find($id);
        $testi->status = $status;
        if ($testi->save()) {
            Session::flash("succMsg", 'Testimonial status updated');
            return redirect('admin/testimonial');
        } else {
            Session::flash("errMsg", 'Testimonial status is not updated');
            return redirect('admin/testimonial');
        }
    }
    //Breaking news view
    function breakingnews()
    {
        $news = Notification::OrderBy('id', 'desc')->get();
        return view('admin.breakingnews', ['bnews' => $news]);
    }
    //add breaking news
    function addbreakingnews(BreakingnewsRequest $res)
    {
        $title = $res->get('title');
        $news = $res->get('news');
        $bnews = new Notification();
        $bnews->title = $title;
        $bnews->news = $news;
        if ($bnews->save()) {
            Session::flash("succMsg", 'Breaking news added successfully');
            return redirect('admin/breakingnews');
        } else {
            Session::flash("errMsg", 'Breaking news not added');
            return redirect('admin/breakingnews');
        }
    }
    //Delete breaking news

    //Officer Dm view
    function dm()
    {
        $dm = Tbl_Offier::where(['position' => 'dm'])->OrderBy('id', 'desc')->get();
        return view('admin.dm', ['dmdata' => $dm]);
    }
    //Add Dm
    function adddm(OfficerRequest $res)
    {
        $postion = 'dm';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }
        
        $fname = 'DM' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'DM(ज़िला अधिकारी) successfully added');
                return redirect('admin/dm');
            } else {
                Session::flash("errMsg", 'DM(ज़िला अधिकारी) not added');
                return redirect('admin/dm');
            }
        }
    }
    //lekhpal view
    function lekhpal()
    {
        $lekhpal = Tbl_Offier::where(['position' => 'lekhpal'])->OrderBy('id', 'desc')->get();
        return view('admin.lekhpal', ['lekhpal' => $lekhpal]);
    }
    //Add Lekhpal
    function addlekhpal(OfficerRequest $res)
    {
        $postion = 'lekhpal';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Lekhpal' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Lekhpal(लेखपाल) successfully added');
                return redirect('admin/lekhpal');
            } else {
                Session::flash("errMsg", 'Lekhpal(लेखपाल) not added');
                return redirect('admin/lekhpal');
            }
        }
    }
    //secretary
    function secretary(){
        $secretary = Tbl_Offier::where(['position' => 'secretary'])->OrderBy('id', 'desc')->get();
        return view('admin.secretary', ['secretary' => $secretary]);
    }
    //Secretary
    function addsecretary(OfficerRequest $res)
    {
        $postion = 'secretary';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Secretary' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Secretary(ग्राम सचिव) successfully added');
                return redirect('admin/secretary');
            } else {
                Session::flash("errMsg", 'Secretary(ग्राम सचिव) not added');
                return redirect('admin/secretary');
            }
        }
    }
    //formerhelper
    function formerhelper(){
        $formerhelper = Tbl_Offier::where(['position' => 'formerhelper'])->OrderBy('id', 'desc')->get();
        return view('admin.formerhelper', ['formerhelper' => $formerhelper]);
    }
    //Add formerhelper
    function addformerhelper(OfficerRequest $res)
    {
        $postion = 'formerhelper';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Formerhelper' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Former Helper(किसान सहायक) successfully added');
                return redirect('admin/formerhelper');
            } 
            else {
                Session::flash("errMsg", 'Former Helper(किसान सहायक) not added');
                return redirect('admin/formerhelper');
            }
        }
    }
    //Kotedar
    function kotedar(){
        $kotedar = Tbl_Offier::where(['position' => 'kotedar'])->OrderBy('id', 'desc')->get();
        return view('admin.kotedar', ['kotedar' => $kotedar]);
    }
    //Add kotedar
    function addkotedar(OfficerRequest $res)
    {
        $postion = 'kotedar';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Kotedar' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Kotedar(कोटेदार) successfully added');
                return redirect('admin/kotedar');
            } 
            else {
                Session::flash("errMsg", 'Kotedar(कोटेदार) not added');
                return redirect('admin/kotedar');
            }
        }
    }
    //VES(ग्राम रोजगार सेवक)
    function ves(){
        $ves = Tbl_Offier::where(['position' => 'ves'])->OrderBy('id', 'desc')->get();
        return view('admin.ves', ['vesdata' => $ves]);
    }
    //Add VES
    function addves(OfficerRequest $res)
    {
        $postion = 'ves';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'VES' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Village Employment Servent(ग्राम रोजगार सेवक) successfully added');
                return redirect('admin/ves');
            } 
            else {
                Session::flash("errMsg", 'Village Employment Servent(ग्राम रोजगार सेवक) not added');
                return redirect('admin/ves');
            }
        }
    }
    //BLO(बूथ स्तर अधिकारी)
    function blo(){
        $blo = Tbl_Offier::where(['position' => 'blo'])->OrderBy('id', 'desc')->get();
        return view('admin.blo', ['blodata' => $blo]);
    }
    //Add BLO
    function addblo(OfficerRequest $res)
    {
        $postion = 'blo';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'BLO' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'BLO(बूथ स्तर अधिकारी) successfully added');
                return redirect('admin/blo');
            } 
            else {
                Session::flash("errMsg", 'BLO(बूथ स्तर अधिकारी) not added');
                return redirect('admin/blo');
            }
        }
    }
    //Anganwadi
    function anganwadi(){
        $anganwadi = Tbl_Offier::where(['position' => 'anganwadi'])->OrderBy('id', 'desc')->get();
        return view('admin.anganwadi', ['anganwadidata' => $anganwadi]);
    }
    //Add Anganwadi
    function addanganwadi(OfficerRequest $res)
    {
        $postion = 'anganwadi';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }
        $fname = 'Anganwadi' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Anganwadi(अगनबाड़ी) successfully added');
                return redirect('admin/anganwadi');
            } 
            else {
                Session::flash("errMsg", 'Anganwadi(अगनबाड़ी) not added');
                return redirect('admin/anganwadi');
            }
        }
    }
    //Anganwadi Helper(अगनबाड़ी सहायिका)
    function anganwadihelper(){
        $anganwadihelper = Tbl_Offier::where(['position' => 'anganwadihelper'])->OrderBy('id', 'desc')->get();
        return view('admin.anganwadihelper', ['anganwadihelperdata' => $anganwadihelper]);
    }
    //Add Anganwadi Helper(अगनबाड़ी सहायिका)
    function addanganwadihelper(OfficerRequest $res)
    {
        $postion = 'anganwadihelper';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Anganwadihelper' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Anganwadi Helper(अगनबाड़ी सहायिका) successfully added');
                return redirect('admin/anganwadihelper');
            } 
            else {
                Session::flash("errMsg", 'Anganwadi Helper(अगनबाड़ी सहायिका) not added');
                return redirect('admin/anganwadihelper');
            }
        }
    }
    //Asha(आशा)  View
    function asha(){
        $asha = Tbl_Offier::where(['position' => 'asha'])->OrderBy('id', 'desc')->get();
        return view('admin.asha', ['ashadata' => $asha]);
    }
    //Add Asha(आशा)
    function addasha(OfficerRequest $res)
    {
        $postion = 'asha';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Asha' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Asha(आशा) successfully added');
                return redirect('admin/asha');
            } 
            else {
                Session::flash("errMsg", 'Asha(आशा) not added');
                return redirect('admin/asha');
            }
        }
    }

    //ANM(सहायक नर्सिंग दाई)
    function anm(){
        $anm = Tbl_Offier::where(['position' => 'anm'])->OrderBy('id', 'desc')->get();
        return view('admin.anm', ['anmdata' => $anm]);
    }
    //Add ANM(सहायक नर्सिंग दाई)
    function addanm(OfficerRequest $res)
    {
        $postion = 'anm';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }

        $fname = 'Anm' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'ANM(सहायक नर्सिंग दाई) successfully added');
                return redirect('admin/anm');
            } 
            else {
                Session::flash("errMsg", 'ANM(सहायक नर्सिंग दाई) not added');
                return redirect('admin/anm');
            }
        }
    }
    //Watchman(चौकीदार) View
    function watchman(){
        $watchman= Tbl_Offier::where(['position' => 'watchman'])->OrderBy('id', 'desc')->get();
        return view('admin.watchman', ['watchmandata' => $watchman]);
    }
    //Add Watchman(चौकीदार)
    function addwatchman(OfficerRequest $res)
    {
        $postion = 'watchman';
        $name = $res->get('name');
        $mobile = $res->get('mobile');
        $joindate = $res->get('joindate');
        $enddate = $res->get('enddate');
        $file = $res->file('file');
        $address = $res->get('address');
        $present=$res->get('present');
        if($present!=""){
            $enddate=$present;
        }
        $fname = 'Watchman' . rand() . "." . $file->extension();
        $desfolder = public_path('/officers');
        if ($file->move($desfolder, $fname)) {
            $officer = new Tbl_Offier();
            $officer->position = $postion;
            $officer->name = $name;
            $officer->mobile = $mobile;
            $officer->joindate = $joindate;
            $officer->enddate = $enddate;
            $officer->image = $fname;
            $officer->address = $address;
            $officer->office_address = $address;
            $officer->facebook = "";
            $officer->twitter = "";
            $officer->instagram = "";
            if ($officer->save()) {
                Session::flash("succMsg", 'Watchman(चौकीदार) successfully added');
                return redirect('admin/watchman');
            } 
            else {
                Session::flash("errMsg", 'Watchman(चौकीदार) not added');
                return redirect('admin/watchman');
            }
        }
    }
}
