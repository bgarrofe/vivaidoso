@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
    <!--Carousel Start -->
    <!--
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('assets/images/slide_4.png') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slide_5.jpg') }}" alt="slider-image">
        </div>
    </div>
    -->
    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
    <!-- Accordions Section End -->
    <div class="container">
        <!-- Notifications -->
        @include('notifications')
        <div class="panel banner-panel">
            <div class="row">
                <div class="col-md-5">
                    <div class="logotype">
                        <h1>
                            <a href="index.html">
                                <span class="logo">Viva Idoso</span><br>
                                <span class="slogan">viva melhor</span>
                            </a>
                        </h1>
                        <span class="subtitle">The care you want <br>– when and where you <br>need it!</span>
                    </div>
                </div>
                <div class="col-md-7 hidden-sm hidden-xs">
                    <div class="banner">
                        <img class="media-object" src="{{ asset('assets/images/banner.jpg') }}" alt="image">
                    </div>

                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Accordions Start -->
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">Serviços</span></h3>
                <h4 class="text-center"> Encontre a melhor solução para o seu familiar idoso </h4>
            </div>
            <!-- Accordions End -->
            <div class="col-md-6 col-sm-12 wow slideInLeft">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                Casas de Repouso </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                Apoio Domiciliar </a>
                            </li>
                            <li>
                                <a href="#tab_default_3" data-toggle="tab">
                                Home Care </a>
                            </li>
                            <li>
                                <a href="#tab_default_4" data-toggle="tab">
                                Centro Dia </a>
                            </li>
                            
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <p>
                                            <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img5.jpg') }}" alt="image">
                                            </a>
                                        </p>
                                        
                                    </div>
                                </div>
                                <p>
                                    Aqui, designamos como Casa de Repouso o conjunto das respostas residenciais para pessoas idosas ou outras que, por diversas razões independentemente da idade, possam necessitar de assistência. Designações como lar para idosos, residência geriátrica, pousada para idosos, centro geriátrico, residência de idosos, clínica de idosos, clínica geriátrica, hotel de idosos ou hotel geriátrico, constituem o vocabulário mais recente para esse tipo instituição.
                                </p>
                                <p>
                                    Esses estabelecimentos prestam um conjunto de atividades e serviços, sob responsabilidade médica, designadamente alimentação adequada às necessidades dos residentes, cuidados de higiene pessoal, tratamento de roupa, higiene dos espaços, atividades de animação sociocultural, lúdico-recreativas e ocupacionais, apoio no desempenho das atividades da vida diária, cuidados de enfermagem, bem como o acesso a cuidados de saúde e administração de fármacos, entre outros serviços que podem ser oferecidos de acordo com a proposta de cada instituição.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <p>
                                            <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img6.jpg') }}" alt="image">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    O serviço de apoio domiciliar destina-se a idosos que, por diversos motivos, não possam assegurar a satisfação das suas necessidades básicas. Através do apoio domiciliar, os idosos podem receber serviços personalizados e individualizados em seu domicilio. Este apoio pode ser realizado por agência de cuidadores de idosos e enfermeiros e por cooperativas formadas por estes profissionais.
                                </p>
                                <p>
                                    Cada instituição tem sua política de preços e benefícios, que podem incluir serviço de monitoramento por câmera, exames radiológicos e laboratorias em domicílio, ambulância 24hrs, acompanhamento de enferermeiro, clínico geral, fisioterapeuta, etc. No nosso website você conseguirá filtrar os serviços que deseja e o valor máximo que está disposto a pagar pelos serviços disponibilizados.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <p>
                                            <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img7.jpg') }}" alt="image">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                     O Home Care deve ser compreendido como uma modalidade contínua de serviços na área de saúde, cujas atividades são dedicadas aos pacientes/clientes e a seus familiares em um ambiente extra-hospitalar. O propósito do Home Care é promover, manter e/ou restaurar a saúde, maximizando o nível de independência do cliente/paciente, enquanto minimiza os efeitos debilitantes das várias patologias e condições que gerência. 
                                </p>
                                <p>
                                    O serviço Home Care pode ser dividido em:
                                    <ul>
                                        <li>
                                            <p>
                                                <strong>Atenção domiciliar: </strong>termo genérico que envolve ações de promoção à saúde, prevenção, tratamento de doenças e reabilitação desenvolvidas em domicílio.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Assistência domiciliar: </strong>conjunto de atividades de caráter ambulatorial, programadas e continuadas desenvolvidas em domicílio.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Internação Domiciliar: </strong>conjunto de atividades prestadas no domicílio, caracterizadas pela atenção em tempo integral ao paciente com quadro clínico mais complexo e com necessidade de tecnologia especializada.
                                            </p>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <p>
                                             <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img4.jpg') }}" alt="image">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Popularmente conhecido como “creche para idosos”, nesse serviço prestado por Casas de Repouso a pessoa que necessita de acompanhamento pode ficar nesses estabelecimentos por determinadas horas do dia, de acordo com a sua conveniência e de seus familiares. Esse serviço auxilia famílias que convivem com seus idosos, mas não dispõem de tempo integral para assisti-los em domicílio. Aqui você poderá encontrar esse tipo de serviço, de acordo com suas necessidades e possibilidades. 
                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12 wow slideInRight">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">Pesquisar</h4>
                    </div>
                    <div class="panel-body">
                        <form class="contact" id="contact" action="{{ URL::to('search') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select id="estado" class="form-control">
                                        <option></option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->uf }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                <label>Cidade</label>
                                    <select id="cidade" class="form-control">
                                        <option></option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                <label>Bairro</label>
                                    <select id="bairro" class="form-control">
                                        <option></option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Faixa de Valor Mensal</label>
                                    <select id="valor" class="form-control">
                                        <option value="1">Até R$ 1000</option>
                                        <option value="2">R$1000- 3000</option>
                                        <option value="3">R$ 3000 – 5000</option>
                                        <option value="4">R$ 5000 – 7000</option>
                                        <option value="5">R$ 7000 – 10000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                <label>Leitos</label>
                                    <select id="leitos" class="form-control">
                                        <option value="1">Individual</option>
                                        <option value="2">Duplo</option>
                                        <option value="3">Triplo</option>
                                        <option value="4">Quádruplo</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                <label>Grau de Dependência</label>
                                    <select id="grau" class="form-control">
                                        <option>Grau 1</option>
                                        <option>Grau 2</option>
                                        <option>Grau 3</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select id="sexo" class="form-control">
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                        <option>Misto</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                <label>Serviços inclusos</label>
                                    <select id="servicos" class="form-control">
                                        <option>Cuidador individual 24hrs</option>
                                        <option>Fisioterapeuta</option>
                                        <option>Terapia Ocupacional</option>
                                        <option>Psicólogo</option>
                                        <option>Acompanhamento médico</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                <label>Período</label>
                                    <select id="periodo" class="form-control">
                                        <option>Permanente</option>
                                        <option>Temporário</option>
                                        <option>Creche Dia</option>
                                        <option>Diárias Avulsas</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="input-group pull-right">
                                <button class="btn btn-primary" type="submit">Pesquisar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- //Accordions Section End -->
        <!-- Accordions Start -->
        <div class="text-center">
            <h3 class="border-success"><span class="heading_border bg-success">Informações</span></h3>
            <h4 class="text-center"> Noções básicas sobre as diferentes soluções para idosos </h4>
        </div>
        <!-- Accordions End -->
        <!-- What we are section Start -->
        <div class="row indent">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 wow slideInLeft">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">Lares e Residências</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/image_12.jpg') }}" alt="image_12" class="img-responsive">
                <h4>Alojamento colectivo para idosos</h4>
                <p>
                    Os lares e as residências destinam-se a idosos que, por várias razões, não possam permanecer na sua casa. Genericamente, os lares e as residências desenvolvem um conjunto de actividades de apoio social e cuidados de enfermagem, adequados às mais diversas necessidades dos idosos. Embora partilhem do mesmo objectivo, os lares e as residências diferem entre si, no modelo de alojamento e nas condições que cada instituição oferece aos idosos.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6 wow slideInRight">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">Apoio Domiciliar</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/image_11.jpg') }}" alt="image_11" class="img-responsive">
                <h4>Cuidados prestados a idosos no domicilio</h4>
                <p>
                    O serviço de apoio domiciliário destina-se a idosos que, por diversos motivos, não possam assegurar a satisfação das suas necessidades básicas. Através do apoio domiciliário, os idosos podem receber serviços personalizados e individualizados no seu domicilio. O apoio domiciliário caracteriza-se também, por uma oferta diversificada no que respeita ao horário e ao tipo de serviços que cada instituição presta aos idosos.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->

        <!-- Testimonial Start -->
        <div class="row">
            <!-- Testimonial Section -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Testimonials</span></h3>
            </div>
            <div class="col-md-4 wow bounceInLeft" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('assets/images/authors/avatar3.jpg') }}" alt="avatar3" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow bounceIn" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('assets/images/authors/avatar2.jpg') }}" alt="avatar2" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 wow bounceInRight" data-wow-duration="3s">
                <div class="author">
                    <img src="{{ asset('assets/images/authors/avatar4.jpg') }}" alt="avatar4" class="img-responsive img-circle pull-left">
                    <p class="text-right">
                        Tonny Jakson
                        <br>
                        <small class="text-right">Themeforest.net</small>
                    </p>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <!-- Testimonial Section End -->
        </div>
        <!-- Testimonial End -->
        <!-- Features Start -->
        <div class="row features">
            <div class="text-center">
                <div class="text-center">
                    <h3 class=" border-warning"><span class="heading_border bg-warning">Features</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4><bold>Responsive Design</bold></h4>
                </div>
                <div>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4><bold>Html 5</bold></h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.8s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4><bold>Unique Design</bold></h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 " data-hc="#1360b3 "></i>
                    </a>
                    <h4><bold>Css</bold></h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="1.2s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4>Clean Design</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 " data-hc="#91d659 "></i>
                    </a>
                    <h4>Bootstrap</h4>
                    <p>
                        <label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</label>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Features End -->
        <!-- Our Skills Start -->
        
        <div class="text-center marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>
        </div>
            </div>
        <div class="sliders">
            <!-- Our skill Section start -->
            <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3.5s">
                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Bootstrap</strong>
                </div>
                <span>Lorem Ipsum is simply dummy text of the printing and type setting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="text-center center-block">
                    <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="60%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Jquery</strong>
                </div>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.2s">
                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Html 5</strong>
            </div>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.8s">
                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="70%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">CSS 3</strong>
            </div>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
        </div>
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->
@stop

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <script>
        $("#estado").change(function() {
            var idState = $( this ).val();
   
            $.ajax({
                method: "GET",
                url: "search/cities/" + idState
            })
            .done(function(data) {
                //alert(data);
                $('#cidade').empty();
                $('#bairro').empty();
                $('#cidade').append('<option>Selecione</option>');
                $.each(data, function(i, d) {
                    // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                    $('#cidade').append('<option value="' + d.id + '">' + d.nome + '</option>');
                });
                //alert( "success" );
            //here it will populate the second select
            });
        });
    </script>
    <script>
        $("#cidade").change(function() {
            var idCity = $( this ).val();
   
            $.ajax({
                method: "GET",
                url: "search/neighbourhoods/" + idCity
            })
            .done(function(data) {
                //alert(data);
                $('#bairro').empty();
                $('#bairro').append('<option>Todos</option>');
                $.each(data, function(i, d) {
                    // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                    $('#bairro').append('<option value="' + d.id + '">' + d.nome + '</option>');
                });
                //alert( "success" );
            //here it will populate the second select
            });
        });
    </script>
    <!--page level js ends-->

@stop
