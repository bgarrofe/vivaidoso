@extends('layouts/default')

{{-- Page title --}}
@section('title')
Pesquisar
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/news.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/search.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container search-page search-content-1 search-content-3">
        <div class="row">
            <h3><span class="text-blue">2371</span> resultados encontrados
            </h3>
            <hr>
            <div class="col-md-4 ">
                <!-- Tabbable-Panel Start -->
                <div class="search-filter ">
                    <div class="search-label uppercase">Search By</div>
                    <div class="input-icon right">
                        <i class="icon-magnifier"></i>
                        <input type="text" class="form-control" placeholder="Filter by keywords"> </div>
                    <div class="search-label uppercase">Sort By</div>
                    <select class="form-control">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                    <div class="search-label uppercase">Date</div>
                    <div class="input-icon right">
                        <i class="icon-calendar"></i>
                        <input class="form-control date-picker" type="text" placeholder="Any Date"> </div>
                    <button class="btn green bold uppercase btn-block">Update Search Results</button>
                    <div class="search-filter-divider bg-grey-steel"></div>
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn grey bold uppercase btn-block">Reset Search</button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn grey-cararra font-blue bold btn-block">Advanced Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- News1 Section Start -->
                <div class="search-container ">
                    <ul>
                        <li class="search-item clearfix">
                            <a href="#">
                                <img src="{{ asset('assets/img/page_general_search/01.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="#">Casa de Repouso e Saúde de S. Brás</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p > Beneficiando de microclima privilegiado, entre o litoral e a serra algarvia, e implantada numa área de dois hectares, em zona de baixa densidade de construção, a Casa de (...) </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="#">
                                <img src="{{ asset('assets/img/page_general_search/1.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">Lorem ipsum dolor</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/page_general_search/02.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">sit amet</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/page_general_search/2.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">consectetur adipiscing</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/page_general_search/03.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">Donec efficitur</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/page_general_search/05.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">mauris quam</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="search-item clearfix">
                            <a href="javascript:;">
                                <img src="{{ asset('assets/img/page_general_search/5.jpg') }}">
                            </a>
                            <div class="search-content">
                                <h2 class="search-title">
                                    <a href="javascript:;">volutpat nunc</a>
                                </h2>
                                <small class="search-desc">Faro, São Brás de Alportel</small>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>
                                <div class="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-danger">Lar</button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-anchor" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-calculator" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="search-pagination">
                        <ul class="pagination">
                            <li class="page-active">
                                <a href="javascriptt:;"> 1 </a>
                            </li>
                            <li>
                                <a href="javascriptt:;"> 2 </a>
                            </li>
                            <li>
                                <a href="javascriptt:;"> 3 </a>
                            </li>
                            <li>
                                <a href="javascriptt:;"> 4 </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- //News1 Section End -->
            </div>
            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
    <!--tags-->
    <script src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            new WOW().init();
        });
    </script>
    <!-- end of page level js -->

@stop
