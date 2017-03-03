@extends('layouts.backend')
@section('Title','List Patients')

@section('content')
    <section class="content patients">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Patients</h2>
                <small class="text-muted">Welcome to Swift applications</small>
            </div>

            <div class="row clearfix">
                @foreach($patients as $patient)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="card all-patients">
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-center m-b-0">
                                        <a href="#" class="p-profile-pix">
                                            <img src="{{avatarPath($patient->avatar, $patient)}}" alt="user" class="img-circle img-responsive">
                                        </a>
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
                                            <abbr title="Phone">P:</abbr>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 text-center">
                    {{ $patients->links() }}
                    <a href="#" class="btn btn-raised g-bg-cyan">Add Patient</a>
                </div>
            </div>
        </div>
    </section>
@endsection