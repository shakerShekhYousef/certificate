@extends('layouts.front_ar.base')
@section('pageTitle', 'من نحن')
@section('content')
<div class="about-page content-page">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.home_ar')}}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">من نحن</li>
            </ol>
        </nav>
    </div>
    <div class="banner text-center">
        <div class="container">
            <div class="title">جامعة ماستري انتل البريطانية</div>
            <p>نحن مؤسسة جامعية أوروبية مستقلة الموقع الجغرافي والثقافة والأسلوب العلمي ، وحصلت على الاعتماد
                والترخيص من الحكومة البريطانية بموجب ترخيصها رقم (14336888) تأسست جامعة ماستري الدولية كمؤسسة
                بريطانيا معنية بالتعليم العالي والتعليم عن بعد ، للتقديم خدمات في مجال التعليم المفتوح والتعليم عن
                بعد ، وهم يؤمنون بضرورة التفاعل الحضاري بين الشعوب.


            </p>
        </div>
    </div>
    <div class="vision" id="vision&mission">
        <div class="container">
            <div class="text-center">
                <div class="title"> الرؤية و المهمة</div>
            </div>
            <div class="sub-title">الرؤية</div>
            <p class="sub-content">جامعة عالمية رائدة في مخرجات التعليم البشري والتقني والاهتمام بجودتها ، وفقًا
                للنهج الأوروبي عبر الإنترنت وبيئة عالمية ناشئة.
            </p>
            <div class="sub-title">المهمة</div>
            <p class="sub-content">أهداف تعلم واضحة للبرنامج والدورات الفردية ، تصف كفاءات الطلاب المتوقعة في نهاية
                البرنامج منهج يعكس أحدث المعارف الدولية ضمن تخصصات البرنامج ، ومرافق الإدارة والحرم الجامعي التي
                تدعم تعلم الطلاب وتطورهم الشخصي على النحو الأمثل. قياس ومتابعة تحقيق أهداف التعلم المقصودة ، مع
                تغذية راجعة منتظمة ومنهجية إلى لجنة البرنامج والمسؤولين عن الدورة.
            </p>
        </div>
    </div>

    <div class="section " id="credits">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="title">شهادة تأسيس شركة ذات مسئولية محدودة </div>

                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="{{asset('front/img/dianaimage2.jpg')}}" width="100%" />
                </div>
            </div>
        </div>
    </div >

</div>
@endsection
