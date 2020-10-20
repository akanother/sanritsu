<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Foundry Multi-purpose HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">--}}

    <link href="css/thema/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/theme-fire.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/font-robotocondensed.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/thema/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:100,300,400,700,700italic" rel="stylesheet" type="text/css">

</head>
<body class="scroll-assist">
<div class="nav-container">
    <a id="top"></a>
    <nav class="bg-dark">
        <div class="nav-bar">
            <div class="module left">
                <a href="index.html">
{{--                    <img class="logo logo-light" alt="Foundry" src="img/logo-light.png" />--}}
{{--                    <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png" />--}}
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Pages
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Elements
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Shop
                            </a>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
<div id="app" class="main-container">

    <section class="image-bg overlay pt240 pb240 pt-xs-180 pb-xs-180">
        <div class="background-image-holder">
            <img alt="image" class="background-image imge" src="img/cover/cover005.jpg" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mb0 uppercase bold italic text-center">オフィスの工事なら</h2>
                    <h1 class="mb0 uppercase bold italic text-center">三立通信工業</h1>
                    <h5 class="uppercase mb32 text-center">Personal Training & Dietary Advice</h5>
                    <p class="lead mb0 text-center">&ldquo;Everyone deserves good health and happiness.<br class="hidden-sm" />My goal is to help people achieve both.&rdquo;</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row mb64 mb-xs-24">
                <div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
                    <h2>サンリツが選ばれる理由.</h2>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="feature">
                        <div class="text-center">
                            <i class="ti-heart icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                            <h5 class="uppercase">全国で3,000社の<br>施工実績</h5>
                        </div>
                        <p class="text-left">首都圏をはじめ、全国各地での実績がございます。北海道から沖縄まで、出張し施工させて頂きます</p>
                    </div>
                    <!--end of feature-->
                </div>
                <div class="col-sm-4 text-center">
                    <div class="feature">
                        <div class="text-center">
                            <i class="ti-heart icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                            <h5 class="uppercase">御社の環境に合わせた<br>増設・移設など自由な設計</h5>
                        </div>
                        <p>お客様の通信頻度に合わせた通信キャリアとサービスの選定から、オフィスの規模に合わせた各種設備工事のご提案をさせて頂きます</p>
                    </div>
                    <!--end of feature-->
                </div>
                <div class="col-sm-4 text-center">
                    <div class="feature">
                        <div class="text-center">
                            <i class="ti-heart icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                            <h5 class="uppercase">安心のサポート対応<br>丁寧なアフターサービス</h5>
                        </div>
                        <p>三立では技術力に裏づけされた技術員が、導入からアフターフォロー（保守）まで、万全の体制でお客様をサポート致します</p>
                    </div>
                    <!--end of feature-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="pt0 pb0 pt-xs-80 bg-primary image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 mt104 mt-sm-80 mt-xs-0 text-center-xs mb-xs-40">
                    <h5 class="uppercase">
                        <strong>オフィスもご家庭も。<br>LAN、電気工事一式をお請けしております。</strong>
                    </h5>
                    <p>三立通信工業は、東京都全域をはじめ神奈川県、千葉県、群馬県、栃木県、茨城県、福島県などで通信工事から電気工事一式をお請けしている専門業者です。 専門業者ならではの豊富な知識と確かな技術で、お客様の根本的な課題を把握し、通信、電機工事を通して解決します。通信、電気工事に関することならなんでもわたしたちにお任せください</p>
                </div>
                <div class="col-md-4 col-md-push-2 col-sm-6">
                    <img alt="Pic" src="img/parts/lan.png">
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-square left bg-secondary">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="https://image.shutterstock.com/z/stock-photo-ip-telephone-and-network-switch-port-gigabit-and-blur-network-administrator-in-data-center-room-791110261.jpg" />
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content overflow-hidden">
            <div class="text-white">
                <h2 class="uppercase bold italic mb-1">IP電話・電話工事</h2>
                <h4>電話工事.</h4>
                <p>お客様の通信頻度に合わせた通信キャリアとサービスの選定から始まり、 気になるIP電話回線についての導入シミュレーションまで、 電話工事に関することなら一括サポート可能です。</p>
                <h6 class="uppercase mb8">PBX・ビジネスホン新規導入</h6>
                <h6 class="uppercase mb8">IP電話機の新規導入・ご相談</h6>
                <h6 class="uppercase mb8">電話機の増設・移設のご相談</h6>
                <a class="btn btn-lg  mt32 mb0" href="#">詳しくみる</a>

            </div>

        </div>
    </section>
    <section class="image-square right bg-secondary">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/cover/cover001.jpg" />
            </div>
        </div>
        <div class="col-md-6 content">
            <div class="text-white text-left-xs">
                <h2 class="uppercase bold italic mb-1">LAN・ネットワーク構築</h2>
                <h4>Network</h4>
                <p>工場やオフィスのネットワーク回線や、第三者の出入りを制限するセキュリティの構築など、オフィスのインフラ構築・セキュリティ工事ならお任せ下さい。電話配線や電気工事と同時に施工ができますので、非常に見栄えが良く、かつ効率の良いインフラ構築が実現可能です。</p>
                <h6 class="uppercase mb8">PBX・ビジネスホン新規導入</h6>
                <h6 class="uppercase mb8">Multi-session discounts</h6>
                <h6 class="uppercase mb8">Train with friends</h6>
                <a class="btn btn-lg mt32 mb0" href="#">Book A Session Now</a>
            </div>
        </div>
    </section>
    <section class="image-square left bg-secondary">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="https://image.shutterstock.com/z/stock-photo-electrician-builder-at-work-examines-the-cable-connection-in-the-electrical-line-in-the-fuselage-1779434408.jpg" />
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content overflow-hidden">
            <div class="text-white">
                <h2 class="uppercase bold italic mb-1">電気工事</h2>
                <h4>電話工事.</h4>
                <p>オフィスインフラ構築時の最重要点は生命線としての電気配線です。容量オーバーによりブレーカーが落ちたり、機器の不具合から漏電したりと原因は様々です。重要なデータの消失を防ぐために、最適な電気環境を構築致します。</p>

                <h6 class="uppercase mb8">PBX・ビジネスホン新規導入</h6>
                <h6 class="uppercase mb8">IP電話機の新規導入・ご相談</h6>
                <h6 class="uppercase mb8">電話機の増設・移設のご相談</h6>
                <a class="btn btn-lg  mt32 mb0" href="#">詳しくみる</a>
            </div>
        </div>
    </section>


    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="uppercase">
                        Creating Vibrant
                        <br> Spaces &amp; Communites
                    </h3>
                </div>
            </div>
            <!--end of row-->
            <div class="row mb80 mb-xs-24">
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1 text-center">
                    <div class="feature boxed">
                        <h1 class="large">64</h1>
                        <h5 class="uppercase">Award Winning Projects</h5>
                    </div>
                </div>
                <div class="col-sm-5 text-center">
                    <div class="feature boxed">
                        <h1 class="large">#3</h1>
                        <h5 class="uppercase">Architects Australia</h5>
                    </div>
                </div>
            </div>
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row mb80 mb-xs-40">
                <div class="col-sm-12 text-center">
                    <h2 class="bold italic uppercase fade-3-4 mb0">Weekly Schedule</h2>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="tabbed-content button-tabs">
                        <ul class="tabs thirds mb64 mb-xs-24">
                            <li class="active">
                                <div class="tab-title">
                                    <span>Monday</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:30am - 07:30am</h6>
                                                <h4>Beacon Hill Reserve</h4>
                                                <p class="mb0">
                                                    420 Lancaster Road
                                                    <br /> Melbourne, 3001
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">08:00am - 09:00am</h6>
                                                <h4>Beacon Hill Reserve - Advanced</h4>
                                                <p class="mb0">
                                                    420 Lancaster Road
                                                    <br /> Melbourne, 3001
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:00pm - 07:00pm</h6>
                                                <h4>Clapham Park</h4>
                                                <p class="mb0">
                                                    34 Bauer Road
                                                    <br /> South Melbourne, 3008
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                </div>
                                <!--end of tab content-->
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Wednesday</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:00am - 07:00am</h6>
                                                <h4>Clapham Park</h4>
                                                <p class="mb0">
                                                    434 Bauer Road
                                                    <br /> South Melbourne, 3008
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">07:30am - 08:30am</h6>
                                                <h4>Clapham Park - Advanced</h4>
                                                <p class="mb0">
                                                    434 Bauer Road
                                                    <br /> South Melbourne, 3008
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:00pm - 07:00pm</h6>
                                                <h4>Beacon Hill Reserve - Advanced</h4>
                                                <p class="mb0">
                                                    420 Lancaster Road
                                                    <br /> Melbourne, 3001
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                </div>
                                <!--end of tab content-->
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Friday</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:30am - 07:30am</h6>
                                                <h4>Thompson Reserve</h4>
                                                <p class="mb0">
                                                    167 Darbyshire Road
                                                    <br /> Melbourne, 3001
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">08:00am - 09:00am</h6>
                                                <h4>Thompson Reserve</h4>
                                                <p class="mb0">
                                                    167 Darbyshire Road
                                                    <br /> Melbourne, 3001
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                    <div>
                                        <div class="overflow-hidden">
                                            <div class="inline-block pull-left">
                                                <h6 class="uppercase mb8">06:00pm - 07:00pm</h6>
                                                <h4>Clapham Park</h4>
                                                <p class="mb0">
                                                    34 Bauer Road
                                                    <br /> South Melbourne, 3008
                                                    <br />
                                                    <a href="#">Get Directions</a>
                                                </p>
                                            </div>
                                            <div class="inline-block pull-right  pt48 pt-xs-24">
                                                <a class="btn btn-lg" href="#">Join This Class</a>
                                            </div>
                                        </div>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <!--end of class-->
                                </div>
                                <!--end of tab content-->
                            </li>
                        </ul>
                    </div>
                    <!--end of button tabs-->
                </div>
            </div>
        </div>
        <!--end of container-->
    </section>
    <section class="image-bg overlay pt180 pb180 pt-xs-96 pb-xs-96">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/fitness4.jpg" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h4 class="bold uppercase italic mb8">&ldquo;Training with Ben has been tough as hell, and a ton of fun. I've never felt better about myself!&rdquo;</h4>
                    <h6 class="uppercase mb0">Jane Simpson - Client of 2 years</h6>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg-dark pb64">
        <div class="container">
            <div class="row mb64 mb-xs-32">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <h2 class="uppercase bold italic">
                        <i class="ti-instagram">&nbsp;</i>SANRITSU</h2>
                    <p class="lead">
                        Follow me on Instagram for workout inspiration and shots from our awesome group fitness sessions.
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
        <div class="instafeed grid-gallery gapless mb64 mb-xs-32" data-user-name="mrareweb">
            <ul></ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <a class="btn btn-lg btn-filled mb0" href="#">See more on Instagram</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row mb80 mb-xs-40">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <h2 class="uppercase bold italic fade-3-4 mb0">Insights</h2>
                </div>
            </div>
            <!--end of row-->
            <div class="row masonry">
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">August 3, 2015 in Fitness</span>
                        <h4 class="mb120 uppercase bold italic">Maintaining activity within the fat-burning zone</h4>
                        <a href="#" class="mb0 btn">
                            Read Insight
                            <i class="ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">August 1, 2015 in Diet</span>
                        <h4 class="mb120 uppercase bold italic">Tips for avoiding over consumption</h4>
                        <a href="#" class="mb0 btn">
                            Read Insight
                            <i class="ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">July 24, 2015 in Motivation</span>
                        <h4 class="mb120 uppercase bold italic">Returning to fitness after long periods - what not to do</h4>
                        <a href="#" class="mb0 btn">
                            Read Insight
                            <i class="ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <footer class="bg-primary pt96 pb96 pt-xs-48 pb-xs-48">
        <div class="container">
            <div class="row mb64 mb-xs-32">
                <div class="col-md-5 text-right text-left-xs">
                    <h1 class="uppercase bold italic">Let's smash
                        <br /> your goals
                        <br /> together</h1>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs text-center pt48">
                    <i class="icon icon-lg ti-bolt display-block"></i>
                </div>
                <div class="col-md-5 col-sm-6">
                    <p class="lead">
                        Questions, bookings or feedback? Contact me by any
                        <br class="hidden-sm" /> of the channels below. I'll respond ASAP!
                    </p>
                    <h4 class="mb8">P: 0000 000 000</h4>
                    <h4 class="mb8">E: hoge@sanritsu.co.jp</h4>
                    <h4 class="mb0">
                        <i class="ti-twitter-alt"></i> @Gen-Chan</h4>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <p class="fade-1-4">hoge hoge
                        <br /> fuga fuga</hp>
                    <ul class="list-inline social-list mb0">
                        <li>
                            <a href="#">
                                <i class="icon icon-xs ti-twitter-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-xs ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-xs ti-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </footer>
</div>
<div class="foundry_modal text-center image-bg overlay" data-time-delay="3000" data-cookie="signup-form-dismissed">
    <div class="background-image-holder">
        <img alt="Background" class="background-image" src="img/fitness2.jpg" />
    </div>
    <h3 class="uppercase bold italic">Subscribe and receive Ben's
        <br /> awesome fitness tips!</h3>
    <p class="lead mb48">
        This is an auto-show modal that you can customize to appear after a period
        <br /> of time by editing the 'data-time-delay' attribute.
    </p>
    <form class="form-newsletter halves mb160 mb-xs-80" data-success="Thanks for your registration, we will be in touch shortly." data-error="Please fill all fields correctly.">
        <input type="text" name="email" class="mb0 validate-email validate-required  signup-email-field" placeholder="Email Address" />
        <button type="submit" class="mb0">Keep Me Informed</button>
        <iframe srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;>	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>	<h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>	<input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-FNAME&quot;>First Name </label>	<input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-LNAME&quot;>Last Name </label>	<input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>	<div id=&quot;mce-responses&quot; class=&quot;clear&quot;>		<div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>		<div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->" class="mail-list-form">
        </iframe>
    </form>
</div>
<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<script src="js/thema/jquery.min.js"></script>
<script src="js/thema/bootstrap.min.js"></script>
<script src="js/thema/flickr.js"></script>
<script src="js/thema/flexslider.min.js"></script>
<script src="js/thema/lightbox.min.js"></script>
<script src="js/thema/masonry.min.js"></script>
<script src="js/thema/twitterfetcher.min.js"></script>
<script src="js/thema/spectragram.min.js"></script>
<script src="js/thema/ytplayer.min.js"></script>
<script src="js/thema/countdown.min.js"></script>
<script src="js/thema/smooth-scroll.min.js"></script>
<script src="js/thema/parallax.js"></script>
<script src="js/thema/scripts.js"></script>
</body>
</html>
