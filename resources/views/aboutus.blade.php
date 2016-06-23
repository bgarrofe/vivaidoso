@extends('layouts/default')

{{-- Page title --}}
@section('title')
About us
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon-colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12 wow bounceInLeft">
                <h2><label>Viva Idoso</label></h2>
                <p>
                    Somos um site cujo objetivo é prestar serviços ao público idoso, ajudando-o a encontrar a melhor soluç¬ão para suas necessidades. Aqui você poderá obter facilmente as informações que você precisa, por isso reunimos todas num único lugar, de forma prática, simples e fácil.
                </p>
                <p>
                    Oferecemos um amplo catálogo de busca de serviços para idosos como casas de repouso, apoio domiciliar, opções de home care e centro dia (conhecido como creche para idoso). Também oferecemos buscas de serviços de profissionais especializados como fonoaudiologistas, fisioterapeutas, nutricionistas, assim como comércio especializado em produtos para o público idoso ou com algum tipo de deficiência.
                </p>
                <p>
                    Nosso site disponibiliza informações apenas para o Estado do Rio de Janeiro, dando ao carioca uma ampla opção de serviços.
                </p>
                <img src="{{ asset('assets/images/signature.png') }}" alt="slider-image">
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig">
                
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_17.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->
        <!-- Services Section Start -->
        <div class="row">
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success" >Serviços</span></h3>
            </div>
            <!-- left Section Start -->
            <div class="col-md-6 col-sm-12">
                <!-- Responsive Section Start -->
                <div class="col-sm-6 col-md-6 wow zoomIn">
                    <div class="box">
                        <div class="box-icon">
                            <i class="livicon icon1" data-name="home" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        </div>
                        <div class="info">
                            <h3 class="success text-center">Resident Care</h3>
                            <p>Our Living communities are designed for seniors who want to live in an apartment home with access to meals, recreational.</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 wow zoomIn">
                    <div class="box">
                        <div class="box-icon box-icon1">
                            <i class="livicon icon1" data-name="nurse" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="info">
                            <h3 class="primary text-center">Continuing Care</h3>
                            <p>Trained caregivers provide assisted livingcare by providing assistance with medication management, activities of daily living.</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Section End -->
            <!-- Right Section Start -->
            <div class="col-md-6 col-sm-12">
                <!-- Responsive Section Start -->
                <div class="col-sm-6 col-md-6 wow zoomIn">
                    <div class="box">
                        <div class="box-icon">
                            <i class="livicon icon1" data-name="clock" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        </div>
                        <div class="info">
                            <h3 class="success text-center">Life Care</h3>
                            <p>Specifically designed memory care environments and associates trained to care for people living with dementia.</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 wow zoomIn">
                    <div class="box">
                        <div class="box-icon box-icon1">
                            <i class="livicon icon1" data-name="home" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                        </div>
                        <div class="info">
                            <h3 class="primary text-center">Independent Living</h3>
                            <p>Lifecare provides exceptional retirement living, an all-encompassing lifestyle that offers advantages, like asset.</p>
                            <div class="text-right primary"><a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Section End -->
        </div>
        <!-- // Services Section End -->
        <!-- Our Team Section Start -->
        <div class="row">
            <!-- Our Team Heading Start -->
            <div class="text-center">
                <h3 class="border-danger"><span class="heading_border bg-danger" >Our Team</span></h3>
            </div>
            <!-- //Our Team Heading End -->
            <!-- Image1 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn">
                <div class="thumbnail bg-white  text-center">
                    <img src="{{ asset('assets/images/img_3.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>John Doe</b>
                        <br /> Founder &amp; Partner
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image1 Section End -->
            <!-- Image2 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn">
                <div class="thumbnail bg-white text-center">
                    <img src="{{ asset('assets/images/img_5.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Francina Steinberg</b>
                        <br /> CEO
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image2 Section End -->
            <!-- Image3 Section Start -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn">
                <div class="thumbnail bg-white  text-center">
                    <img src="{{ asset('assets/images/img_4.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Audrey Sheldon</b>
                        <br /> Executive Manager
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image3 Section End -->
            <!-- Image4 Section Star -->
            <div class="col-md-3 col-sm-5 col-xs-10 profile wow zoomIn">
                <div class="thumbnail bg-white text-center">
                    <img src="{{ asset('assets/images/img_6.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Sam Bellows</b>
                        <br /> Manager
                        <br />
                        <div class="divide">
                            <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                            </a>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Image4 Section End -->
        </div>
        <!-- //Our Team Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop
