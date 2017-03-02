@extends('layouts.backend')
@section('Title','List Patients')

@section('content')
    <section class="content patients">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Patients</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>

            <div class="row clearfix">
                @foreach($patients as $patient)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card all-patients">
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-center m-b-0">
                                        <a href="#" class="p-profile-pix"><img src="{{avatarPath($patient->avatar)}}" alt="user" class="img-circle img-responsive"></a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 m-b-0">
                                        <h5 class="m-b-0">{{$patient->user->name}} <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5>
                                        <small>
                                            @foreach($patient->diseases as $disease)
                                                {{ $loop->first ? '' : ', ' }}
                                                {{$disease->name}}
                                            @endforeach
                                        </small>
                                        <address class="m-t-10 m-b-0">
                                            123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                            <abbr title="Phone">P:</abbr> {{}}
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar4.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar5.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar6.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar1.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar1.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar2.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar3.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar4.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card all-patients">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center m-b-0">
                                    <a href="#" class="p-profile-pix"><img src="assets/images/patients/random-avatar5.jpg" alt="user" class="img-circle img-responsive"></a>
                                </div>
                                <div class="col-md-8 col-sm-8 m-b-0">
                                    <h5 class="m-b-0">Johnathan Doe <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>Cardio</small>
                                    <address class="m-t-10 m-b-0">
                                        123 Folsom Ave, Suite 100 New York, CADGE 56824<br><br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection