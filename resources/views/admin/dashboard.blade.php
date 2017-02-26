@extends('layouts.backend')
@section('Title','Dashboard')

@section('pageHead')
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
@endsection

@section('content')
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Dashboard</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                        <div class="content">
                            <div class="text">New Patient</div>
                            <div class="number">27</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                        <div class="content">
                            <div class="text">OPD Patient</div>
                            <div class="number">12</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                        <div class="content">
                            <div class="text">Today's Operations</div>
                            <div class="number">05</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                        <div class="content">
                            <div class="text">Hospital Earning</div>
                            <div class="number">$3,540</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Hospital Survey</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <canvas id="line_chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>New Patient <small >18% High then last month</small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="stats-report">
                                <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-indigo">70.40%</b></div>
                                <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-indigo">25.80%</b></div>
                                <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-indigo">12.50%</b></div>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                 data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                 data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Heart Surgeries <small>18% High then last month</small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="stats-report">
                                <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-blue-grey">80.40%</b></div>
                                <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-blue-grey">13.00%</b></div>
                                <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-blue-grey">9.50%</b></div>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                                 data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
                                 data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Medical Treatment <small>18% High then last month</small></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="stats-report">
                                <div class="stat-item">
                                    <h5>Overall</h5>
                                    <b class="col-green">84.60%</b></div>
                                <div class="stat-item">
                                    <h5>Montly</h5>
                                    <b class="col-green">15.40%</b></div>
                                <div class="stat-item">
                                    <h5>Day</h5>
                                    <b class="col-green">5.10%</b></div>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                                 data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
                                 data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> New Patient List <small>Description text here...</small> </h2>
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
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Diseases</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Virginia </td>
                                        <td>Rose</td>
                                        <td>@Rose</td>
                                        <td><span class="label label-danger">Fever</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Julie </td>
                                        <td>Gaylord</td>
                                        <td>@Julie </td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jacqueline </td>
                                        <td>Woods</td>
                                        <td>@Woods</td>
                                        <td><span class="label label-warning">Lakva</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Jonathan </td>
                                        <td>Lewis</td>
                                        <td>@Jonathan </td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Margaret </td>
                                        <td>Griffin</td>
                                        <td>@Margaret </td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Joseph </td>
                                        <td>Hunter</td>
                                        <td>@Hunter</td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection