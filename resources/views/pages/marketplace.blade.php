@extends('layouts.app')

@section('content')
    {{-- section 1 --}}
    <section class="hero-1 section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12 col-12 col-center mb-50">
                    <p>MARKETPLACE</p>
                    <h1 class="title">Build, extend, and create robust products on SelfCoder.</h1>
                    <p class="">Find the perfect template, plugin, or agency to help you realize your vision.</p>
                </div>
                <div class="col-md-12 mb-50">
                    <div class="row mt-5 pt-2 text-left">
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box py-3 rounded mt-4 py5">
                                <a href="">
                                <div class="item-box">
                                    <div class="box-tittle">
                                        <h2 class="m-4">Tamplates</h2>
                                    </div>
                                </div>
                                <p class="box-dec">Build with ready-made apps and templates created by the SelfCoder community.</p>
                            </a>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box  py-3 rounded mt-4 py5">
                                <a href="">
                                <div class="item-box">
                                    <div class="box-tittle">
                                        <h2 class="m-4">Plugins</h2>
                                    </div>
                                </div>
                                <p class="box-dec ">Extend SelfCoder's functionality with new elements, actions, and API connections.</p>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="team-box  py-3 rounded mt-4 py5">
                                <a href="">
                                <div class="item-box">
                                    <div class="box-tittle">
                                        <h2 class="m-4">Agencies</h2>
                                    </div>
                                </div>
                                <p class="box-dec ">Purchase services from our vibrant ecosystem of consultancies and agencies.</p>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 1 end --}}

    {{-- section 3 --}}
    <section class="pt-50 pb-50 section-2">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-12">
                    <div class="headings">
                        <span class="tamplate ">Tamplates <a href="" class="see-all ">See all</a></span>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box tamplate-box">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                  <div class="overlay">
                                    <button class="btn btn-primary">sign up</button>
                                    <button class="btn btn-default">sign in</button>
                                  </div>
                                  <h3>sign in first</h3>
                                  <p>
                                      interacting with the website.
                                  </p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp  delay-4s  animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-box text-center py-3 rounded mt-4 py5">
                        <div class="single-box">
                            <div class="box-img showcase">
                                <img src="{{ asset('assets/img/selfcoder/feature/goodgigs.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 3 end --}}
            {{-- work-section start --}}
            <section class="pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-50">
                            <div class="col-md-12">
                                <div class="headings">
                                    <span class="tamplate ">Plugins <a href="" class="see-all ">See all</a></span>
                                </div>
                            </div>
                            <div class="row mt-5 pt-2">
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin1.png') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Airtable</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin2.svg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Algolia</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box  py-3 rounded mt-4 py5">
                                <a href="">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin3.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Box</h2>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <div class="team-box  py-3 rounded mt-4 py5">
                                <a href="">
                                    <div class="item-box">
                                        <div class="box-img ">
                                            <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin4.svg') }}" alt="">
                                        </div>
                                        <div class="box-tittle">
                                            <h2 class="m-4">Facebook</h2>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin5.png') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Figma</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin6.png') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Google Maps</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin7.svg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Google Optimize</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin8.png') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Google Sign-In</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                    <a href="">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/plugin/plugin9.svg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-4">Intercom</h2>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <!-- /col -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- work-section end --}}
                       {{-- work-section start --}}
            <section class="pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-50">
                            <div class="col-md-12">
                                <div class="headings">
                                    <span class="tamplate ">Agencies  <a href="" class="see-all ">See all</a></span>
                                </div>
                            </div>
                            <div class="row mt-5 pt-2">
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo1.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">AirDev</h2>
                                            </div>
                                        </div>
                                        <a href="" class="box-link">https://airdev.co/selfcoder-development</a>
                                        <p class="box-dec">San Francisco, CA, USA</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo3.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">MVP.dev | Development Experts | Miami & L.A.</h2>
                                            </div>
                                        </div>
                                        <a href="" class="box-link">https://mvp.dev/selfcoder-io/</a>
                                        <p class="box-dec">Miami, FL, USA</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo4.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">The Upstarters</h2>
                                            </div>
                                        </div>
                                        <a href="" class="box-link">https://theupstarters.com/</a>
                                        <p class="box-dec">London, UK</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo3.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">AirDev</h2>
                                            </div>
                                        </div>
                                        <a href="" class="box-link">https://airdev.co/selfcoder-development</a>
                                        <p class="box-dec">San Francisco, CA, USA</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo4.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">Integrations</h2>
                                            </div>
                                        </div>
                                        <p class="box-dec ">Extend SelfCoder’s core functionality with new elements, actions, and API connections.</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 wow fadeInUp  delay-4s animated"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="team-box  py-3 rounded mt-4 py5">
                                        <div class="item-box">
                                            <div class="box-img ">
                                                <img class="img-control" src="{{ asset('assets/img/selfcoder/icon/logo3.jpg') }}" alt="">
                                            </div>
                                            <div class="box-tittle">
                                                <h2 class="m-box">Marketplace</h2>
                                            </div>
                                        </div>
                                        <p class="box-dec ">Find the perfect template or plugin to help you realize your vision.</p>
                                    </div>
                                </div>
                                <!-- /col -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- work-section end --}}

    {{-- section 4 --}}
    <section class="pt-50 pb-50 section-end">
        <!-- Container -->
        <div class="container">
            <div class="row hero-1-content pt-20">
                <div class="col-md-10 col-12 col-center mb-50">
                    <h1 class="title">Create a free account to get started.</h1>
                    <a class="ticket-btn btn-primary" href=""  data-toggle="modal" data-target="#exampleModal">Get Started For Free</a>
                    <p class="sub-text">Join 2,023,090 SelfCoders today and start building.</p>
                </div>
            </div>
        </div>
        <!-- Container -->
    </section>
    {{-- section 4 end --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <section class=" section-2" style="background: url('{{ asset('assets/img/bg/line-bg.png') }}') top center;">
                <!-- Container -->
                <div class="container">
                    <div class="row  ">
                        <div class="container mt-2">
                            <div class="row justify-content-center align-items-center  p-2">
                                <div class="m-1 col-sm-12 col-md-12 col-lg-12 shadow-sm p-3 mb-5 bg-white border rounded">
                                    <div class="pt-5 pb-5">
                                        <img class="rounded mx-auto d-block" src="{{ asset('assets/img/tork-logo.png') }}" alt="" width=70px height=70px>
                                        <h5 class="modal-title text-center" id="exampleModalLabel">SelfCoder</h5>
                                        <hr>
                                        <form class="form-signin rounded-sm ">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills mb-4">
                                                <li class="pill-1">
                                                    <a class="nav-link active rounded-0" data-toggle="tab" href="#login">Login</a>
                                                </li>
                                                <li class="pill-2">
                                                    <a class="nav-link  rounded-0 " data-toggle="tab" href="#register">Register</a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <!-- Tab1 -->
                                                <div id="login" class="container tab-pane active">
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="">Email</label>
                                                        <input type="email" id="inputEmail" class="form-control mb-4" placeholder="example@gmail.com" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="">Password</label>
                                                        <input type="password" id="inputPassword" class="form-control mb-4" placeholder="********" required>
                                                    </div>
                                                    <div class="one-line mb-2">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" checked="checked" value="remember-me"> Remember me
                                                            </label>

                                                        </div>
                                                        <a class="forgot text-right" href="#">Forgot password?</a>
                                                    </div>
                                                    <div class="checkbox mb-3">
                                                        {{-- <label>
                                                            <input type="checkbox" value="login-as-instructor"> Login as instructor
                                                        </label> --}}
                                                    </div>
                                                        <a class="log btn btn-lg btn-dark btn-block rounded-0" href="{{ route('home2') }}">Login</a>
                                                    </div>

                                                <!-- Tab2 -->
                                                <div id="register" class="container tab-pane fade">
                                                    <label for="inputEmail" class="">Email</label>
                                                    <input type="email" id="inputEmail" class="form-control mb-4" placeholder="Email address" required autofocus>
                                                    <label for="inputPassword" class="">Password</label>
                                                    <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required>
                                                    <label for="inputPassword" class="">Confirm Password</label>
                                                    <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Repeat Password" required>

                                                    <div class="checkbox mb-3">
                                                        {{-- <label>
                                                            <input type="checkbox" value="Register-as-instructor"> Register as instructor
                                                        </label> --}}
                                                    </div>
                                                    <button class="btn btn-lg btn-dark btn-block rounded-0" type="submit">Register</button>
                                                </div>
                                            </div>

                                        </form>
                                   </div><!-- /.container -->
                                    </div>
                                    <hr>
                                    <a href="" class="btn btn-primary rounded-0 btn-block">
                                        <img alt="" class="img-google" src="{{ asset('assets/img/selfcoder/plugin/plugin8.png') }}"> Login with Google
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container -->
            </section>
        </div>
      </div>
    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

@section('style')
    @parent
    <style>
    a.log{
        color: white !important;
    }
    .rounded-0{
        border-radius: 10px !important;
    }
    .img-google{
        height: 20px;
        width: 20px;
    }
        .heading {
            text-align: left;
        }

        .title-left {
            text-align: left;
        }

        .wrapper {
            padding: 20px;
        }

        .details-collapse {
            text-align: left;
        }

        .nav-item {
            width: 300px;
        }

        .tab-pane {
            text-align: left;
            font-size: 18px;
            margin-top: 10px;
        }

        .section-2 {
            background: -webkit-linear-gradient(top, rgb(242, 243, 246) 0%, rgba(255, 255, 255, 0) 100%);
        }


        /* show case  */

        .nav-tabs {
            /* border-bottom: 1px solid #dee2e6; */
            border-bottom: none;
        }

        .nav-item {
            /* width: 300px; */
            width: auto;
        }

        img.img-fluid-feature {
            width: 70px;
        }

        .title-showcase {
            font-size: 22px;
            margin: 15px 0;
        }

        p.showcase-content {
            font-size: 18px;
        }

        p.showcase-sub-text {
            font-size: 14px;
        }

        .showcase-link {
            color: blue;
        }

        a.showcase-link i {
            position: relative;
            top: 3px;
        }

        img.show-right {
            border-radius: 10px;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
            background: white;
        }

        .showcase img {
            width: 100%;
        }

        .py5 {
            padding: 20px;
            overflow: visible;
            /* background: none rgba(241, 243, 246, 0.5); */
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 2px 0px;
            transition: background 200ms ease 0s, box-shadow 200ms ease 0s;
            background: #ffff;
        }

        .py5:hover {
            background: white;
            box-shadow: rgb(17 18 38 / 15%) 0px 0px 10px 0px;
        }

        .section-end {
            background-color: rgb(16, 6, 53);
            color: white !important;
        }

        .section-end h1 {
            color: white;
        }

        .hero-1-content .sub-text {
            font-size: 18px;
            margin-top: 10px;
        }
        .headings .tamplate{
            font-size:45px;

        }
        .headings{
            margin-bottom: 14px;
            text-align: center;

        }
        .see-all{
            font-size: 22px;
            margin-left: 30px;
            color: blue;
        }
        .overlay {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        z-index: 2;
        opacity: 0;
        background: rgba(39, 42, 43, 0.8);
        transition: opacity 200ms ease-in-out;
        border-radius: 4px;
        margin: -15px 0 0 -15px;
        }
        .overlay button {
        margin: 5px;
        }
        .overlay:hover {
        opacity: 1;
        }
        .tamplate-box{
            text-align: center;
            margin: 30px;
        }
        .item-box{
            display: flex;

        }
        .img-control {
            height: 60px !important;
            width: auto;
        }
        .m-box{
            margin-left: 1rem;
            font-size: 18px;
        }
        .m-4 {
            /* margin-top: 1.5rem !important; */
            margin-top: 10px !important;
            margin-left: 1rem;
            font-size: 25px;
        }
        .box-link{
            font-size: 16px;
            text-align: 10px;
            color: blue;
        }
        .box-dec{
            font-size: 18px;
        }

    </style>
@endsection
