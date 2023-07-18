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

class FrontController extends Controller
{
    public function home_en()
    {
        $posts = Blog::query()->orderBy('created_at', 'desc')->take(4)->get();
        return view('front.indexEn',compact('posts'));
    }

    public function about_en()
    {
        return view('front.aboutEn');
    }

    public function contact_us()
    {
        return view('front.contactEn');
    }

    public function news_en()
    {
        $posts = Blog::query()->orderBy('created_at', 'desc')->paginate(6);
        return view('front.newsEn', compact('posts'));
    }

    public function show_news(Blog $blog)
    {
        return view('front.news-detailsEn', compact('blog'));
    }

    public function verify_certificate_en()
    {
        $certificate = "no";
        return view('front.certificateEn', compact('certificate'));
    }

    public function search_certificate(Request $request)
    {
        $certificate = Certificate::cla($request->class)
            ->roll($request->roll_no)->first();

        return view('front.certificateEn', compact('certificate'));
    }

    public function print($class, $roll_no)
    {
        $certificate = Certificate::cla($class)
            ->roll($roll_no)->first();
        $data[] = $certificate->toArray();
        $pdf = PDF::loadView('front.printCertificate', $data[0])->setOptions(['defaultFont' => 'sans-serif']);;
        $date = Carbon::now();
        return $pdf->download('certificate_'.$date.'.pdf');

    }

    public function searchBlog(Request $request){
        $posts = Blog::search($request->search)->paginate(6);
        return view('front.newsEn',compact('posts'));
    }
    public function searchDate(Request $request){
        $posts = Blog::search($request->date)->paginate(6);
        return view('front.newsEn',compact('posts'));
    }
    public function programEn(){
        return view('front.programdetailsEn');
    }
    public function contact_us_send(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $message = $request->message;
        $email = $request->email;
        Mail::to(EMAIL)->send(new ContactUsMail($name,$email,$phone,$message));
        session()->flash('success', 'Your message has been send successfully');
        return redirect()->back();
    }
}
