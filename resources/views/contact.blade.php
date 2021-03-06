@extends('layouts/default')

{{-- Page title --}}
@section('title')
Contact
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/contact.css') }}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Map Section Start -->
    <!--
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    -->
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="panel panel-default wrapper">
                <div class="panel-body">

                <div class="col-md-8">
                    <h3 class="page-title">Entre em contato</h3>
                    <div class="note">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut justo ante. Proin ut nisi auctor, semper dolor nec, scelerisque mauris.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut justo ante. Proin ut nisi auctor, semper dolor nec, scelerisque mauris.</p>
                    </div>
                    <!-- Notifications -->
                    @include('notifications')

                    <form class="contact" id="contact" action="#" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group col-md-6">
                            <input type="text" name="contact-name" class="form-control input-lg" placeholder="Nome" required>
                        </div>
                        <div class="form-group  col-md-6">
                            <input type="email" name="contact-email" class="form-control input-lg" placeholder="E-mail" required>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="contact-msg" class="form-control input-lg no-resize" rows="6" placeholder="Sua mensagem..." required></textarea>
                        </div>
                        <div class="form-group col-md-2 col-md-offset-10">
                            <button class="btn btn-success btn-block pull-right" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
                <!-- //Conatc Form Section End -->
                <!-- Address Section Start -->
                <div class="col-md-2">
                    <aside class="contact-info">
                        <dl>
                            <dt>
                                Email
                            </dt>
                            <dd>
                                <a href="mailto:info@combadi.com" title="Click to send us an email">admin@vivaidoso.com</a>
                            </dd>
                            <br>
                            <dt>
                                Telefone
                            </dt>
                            <dd>
                                <a href="tel:00306977447033" title="Click to call us">(021) 9 9999 9999</a>
                            </dd>
                            <br>
                            <dt>
                                Skype
                            </dt>
                            <dd>
                                <a href="skype:combaditravel?call" title="Click to call us on Skype">vivaidoso</a>
                            </dd>
                            <br>
                            <dt>
                                Endereço
                            </dt>
                            <dd>
                                <address>
                                    VivaIdoso<br>
                                    Rua Humberto de Campos, 425<br>
                                    Rio de Janeiro, RJ<br>
                                    CEP 22.123-123<br>
                                    Brazil<br>
                                </address>
                            </dd>
                            <dd class="social-links">
                                <a class="fb" href="http://www.facebook.com/Combadi" title="Find us on Facebook">Facebook</a>
                                <a class="tt" href="http://twitter.com/combaditravel" title="Find us on Twitter">Twitter</a>
                            </dd>
                        </dl>
                    </aside>

                </div>
                <!-- //Address Section End -->
                    
                    
                </div>
            </div>
            
            
        </div>
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <!--
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/gmap.js') }}"></script>
    -->
    <!--page level js ends-->

@stop
