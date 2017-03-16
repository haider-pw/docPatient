@extends('layouts.backend')
@section('Title','List Patients')

@section('content')
    <section class="content patients">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Patients</h2>
                <small class="text-muted">Welcome to Swift applications</small>
            </div>
            <div class="card m-t-15">
                <div class="body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            {!! Form::select('gender',
                                            [
                                                '1' => 'Male',
                                                '2' => 'Female'
                                            ],
                                        null,['class' => 'form-control', 'placeholder' => '-- Gender --'])!!}
                        </div>
                        <div class="col-md-8 col-sm-9 text-right">
                            <div class="btn-group">
                                <button class="btn btn-raised btn-success btn-sm mr-5" id="change-view-today">today</button>
                                <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-day">Day</button>
                                <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-week">Week</button>
                                <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-month">Month</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($patients) > 0)
                <section class="patientsListing">
                    @include('admin.patient.load')
                </section>
            @endif
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();

                $('#load a').css('color', '#dfecf6');
                $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="{{URL::asset('assets/admin/images/rolling.gif')}}" />');

                var url = $(this).attr('href');
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('.patientsListing').html(data);
                }).fail(function () {
                    alert('Patients could not be loaded.');
                });
            }
        });

    </script>
@endsection
