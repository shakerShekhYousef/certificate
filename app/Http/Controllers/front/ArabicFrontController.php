<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\Blog;
use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ArabicFrontController extends Controller
{
    public function home_ar()
    {
        $posts = Blog::query()->orderBy('created_at', 'desc')->take(4)->get();
        return view('front_ar.indexAr',compact('posts'));
    }

    public function about_ar()
    {
        return view('front_ar.aboutAr');
    }

    public function contact_us()
    {
        return view('front_ar.contactAr');
    }

    public function news_ar()
    {
        $posts = Blog::query()->orderBy('created_at', 'desc')->paginate(6);
        return view('front_ar.newsAr', compact('posts'));
    }

    public function show_news_ar(Blog $blog)
    {
        return view('front_ar.news-detailsAr', compact('blog'));
    }

    public function verify_certificate_ar()
    {
        $certificate = "no";
        return view('front_ar.certificateAr', compact('certificate'));
    }

    public function search_certificate(Request $request)
    {
        $certificate = Certificate::cla($request->class)
            ->roll($request->roll_no)->first();

        return view('front_ar.certificateAr', compact('certificate'));
    }

    public function print($class, $roll_no)
    {
        $certificate = Certificate::cla($class)
            ->roll($roll_no)->first();
        $data[] = $certificate->toArray();
        $pdf = PDF::loadView('front_ar.printCertificate', $data[0])->setOptions(['defaultFont' => 'sans-serif']);
        $date = Carbon::now();
        return $pdf->download('certificate_'.$date.'.pdf');

    }

    public function searchBlog(Request $request)
    {
        $posts = Blog::searchAr($request->search)->paginate(6);
        return view('front_ar.newsAr', compact('posts'));
    }

    public function searchDate(Request $request)
    {
        $posts = Blog::search($request->date)->paginate(6);
        return view('front_ar.newsAr', compact('posts'));
    }
    public function programAr(){
        return view('front_ar.programdetailsAr');
    }
    public function contact_us_send(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $message = $request->message;
        $email = $request->email;
        Mail::to(EMAIL)->send(new ContactUsMail($name,$email,$phone,$message));
        session()->flash('success', 'تم ارسال رسالتك بنجاح');
        return redirect()->back();
    }
}
