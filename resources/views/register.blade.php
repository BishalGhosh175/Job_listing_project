@extends('layout')

@section('content')
    <div class="clearfix"></div>
    <input type="hidden" id="is_dashboard_page" value=" "><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-pages-breadcrumb"  style="background: rgba(0, 0, 0, 0.6) url({{asset('img/slider-image.png')}}) 0 0 no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-attachment:scroll;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                    <div class="n-breadcrumb-info">
                                        <h1>Register</h1><p>Register in our system now.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="n-job-pages-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-lg-offset-3">
                                    <div class="row">
                                        <div class="n-job-pages register-page">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="n-page-left-side">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="post-job-heading">
                                                                <h3>Register</h3>
                                                            </div>
                                                        </div>
                                                        <form method="post" action="/register">
                                                            @csrf
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Name:</label>
                                                                    <input class="form-control" type="text" name="name" value="{{old('name')}}"/>
                                                                    @error('name')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>E-mail:</label>
                                                                    <input class="form-control" type="text" name="email" value="{{old('email')}}"/>
                                                                    @error('email')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Password</label>
                                                                    <input class="form-control" type="password" name="password" value="{{old('password')}}"/>
                                                                    @error('password')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Confirm Password</label>
                                                                    <input class="form-control" type="password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                                                                    @error('password_confirmation')
                                                                    <font color="red">{{$message}}</font>
                                                                    @enderror
                                                                </div>
                                                            </div>



                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <div class="buttons-area">

                                                                    <div class="form-group">
                                                                        <input type="checkbox" name="confirm" class="input-icheck-others"/>
                                                                        <p> I Agree <a href="https://bishalghosh175.github.io/terms2/">terms and conditions.</a></p>
                                                                    </div>
                                                                    <button class="btn n-btn-flat btn-mid pull-right " type="submit">Register</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>
@endsection
