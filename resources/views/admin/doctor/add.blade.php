
@extends('layouts.backend')
@section('Title','Add Doctor')

@section('styles')
        <!-- Dropzone Css -->


<link href="{{ URL::asset('assets/admin/plugins/dropzone/dropzone.css')}}" rel="stylesheet">

<script src="{{ URL::asset('assets/admin/plugins/autosize/autosize.js')}}"></script> <!-- Autosize Plugin Js -->
<script src="{{ URL::asset('assets/admin/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->
<script src="{{ URL::asset('assets/admin/plugins/dropzone/dropzone.js')}}"></script> <!-- Dropzone Plugin Js -->



@endsection

@section('pageHead')
    <h1>
        Add Doctor
        <small>New</small>
    </h1>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Doctor</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
            {!! Form::open(['url' => 'doctor/save', 'class' => 'form']) !!}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Information</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('first_name', null,
                                              ['class' => 'form-control',
                                               'placeholder' => 'First Name']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('last_name', null,
                                              ['class' => 'form-control',
                                               'placeholder' => 'Last Name']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            {!! Form::text('d_o_b', null,
                                              ['class' => 'form-control',
                                               'placeholder' => 'Date of Birth']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group drop-custum">
                                        {!! Form::select('size',
                                            [
                                                '1' => 'Male',
                                                '2' => 'Female'
                                            ],
                                        null,['class' => 'form-control', 'placeholder' => '-- Gender --'])!!}
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            @php
                                            $specialitiesArray = array();
                                            foreach($specialities as $Speciality){
                                            $specialitiesArray[$Speciality->id] = $Speciality->name;
                                            }
                                            @endphp

                                            {!! Form::select('specialities[]',
                                            [
                                                $specialitiesArray
                                            ],['class' => 'form-control', 'placeholder' => 'Specialities','multiple' => true])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="website" placeholder="Website URL">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!--form action="" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                        <div class="dropzone-previews"></div>
                                    </form-->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="hobby" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Doctor's Account Information <small>Description text here...</small> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" placeholder="User Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="row clearfix">
                <div class="col-md-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Doctor Social Media Info <small>Description text here...</small> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Facebook">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Twitter">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Google Plus">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="LinkedIN ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Behance">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="dribbble">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                    <button type="submit" class="btn btn-raised">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div-->
            <div class="row clearfix">
                <div class="col-md-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Please Check All The Information is Correct Before Submitting....</small> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="col-xs-12">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                        <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                        <button type="submit" class="btn btn-raised">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection