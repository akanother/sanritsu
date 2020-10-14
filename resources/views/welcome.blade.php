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
                    <img class="logo logo-light" alt="Foundry" src="img/logo-light.png" />
                    <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png" />
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
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Concepts</span>
                                        </li>
                                        <li>
                                            <a href="home-adventure.html">Adventure Travel</a>
                                        </li>
                                        <li>
                                            <a href="home-agency.html">Agency</a>
                                        </li>
                                        <li>
                                            <a href="home-agency-2.html">Agency 2</a>
                                            <span class="label">New!</span>
                                        </li>
                                        <li>
                                            <a href="home-app-landing.html">App Landing</a>
                                        </li>
                                        <li>
                                            <a href="home-app-landing-2.html">App Landing 2</a>
                                        </li>
                                        <li>
                                            <a href="home-capital-firm.html">Capital Firm</a>
                                        </li>
                                        <li>
                                            <a href="home-fashion.html">Fashion</a>
                                        </li>
                                        <li>
                                            <a href="home-fitness.html">Fitness</a>
                                        </li>
                                        <li>
                                            <a href="home-restaurant.html">Restaurant</a>
                                        </li>
                                        <li>
                                            <a href="home-music.html">Music</a>
                                        </li>
                                        <li>
                                            <a href="home-event.html">Event / Seminar</a>
                                        </li>
                                        <li>
                                            <a href="home-architecture.html">Architecture</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="home-photography.html">Photography</a>
                                        </li>
                                        <li>
                                            <a href="home-photography-2.html">Ken Burns</a>
                                        </li>
                                        <li>
                                            <a href="home-personal-portfolio.html">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="home-property.html">Property Listing</a>
                                        </li>
                                        <li>
                                            <a href="home-resume.html">Resumé</a>
                                        </li>
                                        <li>
                                            <a href="home-winery.html">Winery</a>
                                        </li>
                                        <li>
                                            <span class="title">Home Pages</span>
                                        </li>
                                        <li>
                                            <a href="index.html">Home Classic</a>
                                        </li>
                                        <li>
                                            <a href="home-default-2.html">Home Layout 2</a>
                                        </li>
                                        <li>
                                            <a href="home-default-3.html">Home Layout 3</a>
                                        </li>
                                        <li>
                                            <a href="home-default-4.html">Home Layout 4</a>
                                        </li>
                                        <li>
                                            <a href="home-default-5.html">Home Layout 5</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Pages
                            </a>
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Inner Pages</span>
                                        </li>
                                        <li>
                                            <a href="page-about-us-1.html">About Us 1</a>
                                        </li>
                                        <li>
                                            <a href="page-about-us-2.html">About Us 2</a>
                                        </li>
                                        <li>
                                            <a href="page-about-us-3.html">About Us 3</a>
                                        </li>
                                        <li>
                                            <a href="page-services-1.html">Services 1</a>
                                        </li>
                                        <li>
                                            <a href="page-services-2.html">Services 2</a>
                                        </li>
                                        <li>
                                            <a href="page-services-3.html">Services 3</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-1.html">Contact 1</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-2.html">Contact 2</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-3.html">Planner</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Utility Pages</span>
                                        </li>
                                        <li>
                                            <a href="page-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="page-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="page-coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="page-faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page-confirmation.html">Confirmation</a>
                                        </li>
                                        <li>
                                            <a href="page-countdown.html">Countdown</a>
                                        </li>
                                        <li>
                                            <a href="page-countdown-2.html">Countdown 2</a>
                                        </li>
                                        <li>
                                            <a href="page-404.html">404 - Error</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Elements
                            </a>
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Elements</span>
                                        </li>
                                        <li>
                                            <a href="elements-buttons.html">
                                                <i class="ti-link"></i> Buttons</a>
                                        </li>
                                        <li>
                                            <a href="elements-tabs.html">
                                                <i class="ti-layout-tab"></i> Tabbed Content</a>
                                        </li>
                                        <li>
                                            <a href="elements-progress.html">
                                                <i class="ti-rocket"></i> Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="elements-accordions.html">
                                                <i class="ti-layout-accordion-separated"></i> Accordions</a>
                                        </li>
                                        <li>
                                            <a href="elements-alerts.html">
                                                <i class="ti-flag-alt"></i> Alerts</a>
                                        </li>
                                        <li>
                                            <a href="elements-form-inputs.html">
                                                <i class="ti-pencil-alt"></i> Form Inputs</a>
                                        </li>
                                        <li>
                                            <a href="elements-countdown.html">
                                                <i class="ti-alarm-clock"></i> Countdowns</a>
                                        </li>
                                        <li>
                                            <a href="elements-modals.html">
                                                <i class="ti-layout-slider-alt"></i> Modals</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Elements</span>
                                        </li>
                                        <li>
                                            <a href="elements-pricing.html">
                                                <i class="ti-money"></i> Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="elements-icon-boxes.html">
                                                <i class="ti-eye"></i> Icon Boxes</a>
                                        </li>
                                        <li>
                                            <a href="elements-widgets.html">
                                                <i class="ti-layout-media-right"></i> Widgets</a>
                                        </li>
                                        <li>
                                            <a href="elements-typography.html">
                                                <i class="ti-text"></i> Typography</a>
                                        </li>
                                        <li>
                                            <a href="elements-lists.html">
                                                <i class="ti-list"></i> Lists</a>
                                        </li>
                                        <li>
                                            <a href="elements-grid.html">
                                                <i class="ti-view-grid"></i> Grid Structure</a>
                                        </li>
                                        <li>
                                            <a href="elements-textimage.html">
                                                <i class="ti-layout-list-large-image"></i> Text &amp; Image</a>
                                        </li>
                                        <li>
                                            <a href="elements-intros.html">
                                                <i class="ti-microphone"></i> Intro Sections</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">Elements</span>
                                        </li>
                                        <li>
                                            <a href="elements-titles.html">
                                                <i class="ti-layout-cta-left"></i> Titles Left</a>
                                        </li>
                                        <li>
                                            <a href="elements-titles-center.html">
                                                <i class="ti-layout-cta-center"></i> Titles Center</a>
                                        </li>
                                        <li>
                                            <a href="elements-video.html">
                                                <i class="ti-video-clapper"></i> Video Inline</a>
                                        </li>
                                        <li>
                                            <a href="elements-video-bg.html">
                                                <i class="ti-video-clapper"></i> Video BG</a>
                                        </li>
                                        <li>
                                            <a href="elements-video-slider.html">
                                                <i class="ti-video-clapper"></i> Video Slider</a>
                                        </li>
                                        <li>
                                            <a href="elements-galleries.html">
                                                <i class="ti-gallery"></i> Image Galleries</a>
                                        </li>
                                        <li>
                                            <a href="elements-parallax.html">
                                                <i class="ti-layers"></i> Parallax</a>
                                        </li>
                                        <li>
                                            <a href="elements-nav-light.html">
                                                <i class="ti-menu-alt"></i> Nav Styles</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Portfolio
                            </a>
                            <ul>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Contained
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="portfolio-grid-2col.html">
                                                2 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-grid.html">
                                                3 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-grid-4col.html">
                                                4 Columns
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Wide
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="portfolio-wide-2col.html">
                                                2 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-wide.html">
                                                3 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-wide-4col.html">
                                                4 Columns
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="portfolio-parallax.html">
                                        Parallax
                                    </a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Single
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="portfolio-single-1.html">
                                                Case Study 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single-2.html">
                                                Case Study 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single-3.html">
                                                Case Study 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single-4.html">
                                                Case Study 4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-single-5.html">
                                                Case Study 5
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Shop
                            </a>
                            <ul>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Shop Layout
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="shop-sidebar.html">
                                                Sidebar Left
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-sidebar-right.html">
                                                Sidebar Right
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-4col.html">
                                                4 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth.html">
                                                3 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-2col.html">
                                                2 Columns
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Product Single
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="shop-product-sidebar-left.html">
                                                Sidebar Left
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-product-sidebar.html">
                                                Sidebar Right
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-product-fullwidth.html">
                                                No Sidebar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-cart.html">
                                        Cart
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-checkout.html">
                                        Checkout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">
                                Blog
                            </a>
                            <ul>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Listing
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="blog-sidebar.html">
                                                Sidebar Left
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-sidebar-right.html">
                                                Sidebar Right
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-no-sidebar.html">
                                                No Sidebar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Masonry
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="blog-masonry-sidebar.html">
                                                Sidebar Left
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-masonry-sidebar-right.html">
                                                Sidebar Right
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-masonry.html">
                                                3 Columns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-masonry-2col.html">
                                                2 Columns
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Single
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="blog-single-sidebar.html">
                                                Sidebar Left
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-single-sidebar-right.html">
                                                Sidebar Right
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-single-no-sidebar.html">
                                                No Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-single-disqus.html">
                                                Disqus Comments
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-simple-feed.html">
                                        Simple Feed
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
                <div class="module widget-handle search-widget-handle left">
                    <div class="search">
                        <i class="ti-search"></i>
                        <span class="title">Search Site</span>
                    </div>
                    <div class="function">
                        <form class="search-form">
                            <input type="text" placeholder="Type Here" />
                        </form>
                    </div>
                </div>
                <div class="module widget-handle cart-widget-handle left">
                    <div class="cart">
                        <i class="ti-bag"></i>
                        <span class="label number">2</span>
                        <span class="title">Shopping Cart</span>
                    </div>
                    <div class="function">
                        <div class="widget">
                            <h6 class="title">Shopping Cart</h6>
                            <hr>
                            <ul class="cart-overview">
                                <li>
                                    <a href="#">
                                        <img alt="Product" src="img/shop-widget-1.png" />
                                        <div class="description">
                                            <span class="product-title">Canvas Backpack</span>
                                            <span class="price number">$39.90</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img alt="Product" src="img/shop-widget-2.png" />
                                        <div class="description">
                                            <span class="product-title">Vintage Camera</span>
                                            <span class="price number">$249.50</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="cart-controls">
                                <a class="btn btn-sm btn-filled" href="#">Checkout</a>
                                <div class="list-inline pull-right">
                                    <span class="cart-total">Total: </span>
                                    <span class="number">$289.40</span>
                                </div>
                            </div>
                        </div>
                        <!--end of widget-->
                    </div>
                </div>
                <div class="module widget-handle language left">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#">ENG</a>
                            <ul>
                                <li>
                                    <a href="#">French</a>
                                </li>
                                <li>
                                    <a href="#">Deutsch</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
<div id="app" class="main-container">

    <section class="image-bg overlay pt240 pb240 pt-xs-180 pb-xs-180">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/fitness3.jpg" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="mb0 uppercase bold italic    ">CALIFORNIA HAWAII PROMOTIONS</h1>
                    <h5 class="uppercase mb32">Personal Training & Dietary Advice</h5>
                    <p class="lead mb0">
                        &ldquo;Everyone deserves good health and happiness.
                        <br class="hidden-sm" />My goal is to help people achieve both.&rdquo;
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-1 text-center text-left-xs col-sm-5">
                    <h1 class="uppercase mb24 bold italic">We are behind you.</h1>
                    <h5 class="uppercase italic fade-1-4">&ldquo;of the surfer,<br> by the surfer,<br> for the surfer&rdquo;</h5>
                    <hr class="visible-xs">
                </div>
                <div class="col-md-5 col-sm-7">
                    <p>1960年代より日本のサーフィンの発展に寄与してきた中村一巳が、日本にアメリカのサーフィンとサーフボード作りを伝えた人物、タック・カワハラさんと手を結び、1976年に千葉・一宮で創業したサーフボードメーカーとサーフショップです。。それから40年以上に渡り、品質、性能、美しさにこだわり抜いたサーフボードを提供し、一宮の海辺から、多くのサーファーたちのサーフィンライフをサポートし続けております。</p>
                    <p>つねに国内外のトッププロ達のリレーションにより、常に新しいボードデザインの開発に取り組んでおり、それらのデータを元に、一般ユーザーにも乗りやすい、サーファーにベストマッチな板を提供し続けています。</p>
                    <p>オレンジの建物が目を引く海の目の前にあるCHP MAIN SHOW ROOMは、一宮に最初のサーフボードメーカ直営店として1976年に誕生しました。直営店ならではの豊富な品揃え、サーフボードやウェットのカスタムオーダーや、サーフボードのご相談は経験豊富なスタッフが対応します。体験サーフィン、サーフィンスクール、ステップアップ・レッスンもCHPが徹底サポート。サーフィンのこと、波情報、地域の情報などお気軽にお尋ねください。365日年中無休で毎朝早くからOPENして皆様のお越しお待ちしております。
                    </p>
{{--                    <p>--}}
{{--                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur--}}
{{--                    </p>--}}
                    <img alt="signature" src="img/fitness1.png" class="image-small" />
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/fitness6.jpg" />
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content overflow-hidden">
            <div>
                <h2 class="uppercase bold italic mb-1">SURFBOARD</h2>
                <h4>ALL JAPAN QUALITY. ALL JAPAN MADE.</h4>
                <p>グランドチャンプを3回獲得した河野正和や、過去にはワールドチャンピオンのマーチンポーターなど、国内外のトッププロ達のリレーションにより、常に新しいボードデザインの開発に取り組んでおり、それらのデータを元に、一般ユーザーにも乗りやすい、お客様にベストマッチな板を提供し続けています。</p>
                <h6 class="uppercase mb8">Flexible booking times</h6>
                <h6 class="uppercase mb8">Personal Dietary Advice</h6>
                <h6 class="uppercase mb8">Multi-session discounts</h6>
                <h6 class="uppercase mb8">Weekly progress tracking</h6>
                <a class="btn btn-lg mt32 mb0" href="#">Book A Session Now</a>
            </div>
        </div>
    </section>
    <section class="image-square right bg-secondary">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="https://www.chp.surf/wp-content/uploads/2018/03/menu_showroom_sub-1_r1_c2.jpg" />
            </div>
        </div>
        <div class="col-md-6 content">
            <div class="text-white text-left-xs">
                <h2 class="uppercase bold italic mb-1">MAIN SHOW ROOM</h2>
                <h4>365 DAYS OPEN. 365 DYAS SURF.</h4>
                <p>
                    オレンジの建物が目を引く海の目の前にあるCHP MAIN SHOW ROOMは、一宮に最初のサーフボードメーカ直営店として1976年に誕生しました。直営店ならではの豊富な品揃え、サーフボードやウェットのカスタムオーダーや、サーフボードのご相談は経験豊富なスタッフが対応します。体験サーフィン、サーフィンスクール、ステップアップ・レッスンもCHPが徹底サポート。サーフィンのこと、波情報、地域の情報などお気軽にお尋ねください。365日年中無休で毎朝早くからOPENして皆様のお越しお待ちしております。

                </p>
                <h6 class="uppercase mb8">Come to any session</h6>
                <h6 class="uppercase mb8">Multi-session discounts</h6>
                <h6 class="uppercase mb8">Train with friends</h6>
                <a class="btn btn-lg mt32 mb0" href="#">Book A Session Now</a>
            </div>
        </div>
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
                        <i class="ti-instagram">&nbsp;</i>bendobsonfitness</h2>
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
                    <h4 class="mb8">P: 0417 374 992</h4>
                    <h4 class="mb8">E: train@bendobson.net</h4>
                    <h4 class="mb0">
                        <i class="ti-twitter-alt"></i> @bendobson</h4>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <p class="fade-1-4">Handcrafted by Medium Rare &copy; 2015
                        <br /> Built with Variant Page Builder</hp>
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
