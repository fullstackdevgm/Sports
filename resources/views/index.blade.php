@extends('layouts.default')

@section('exHead')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
<link rel="stylesheet" href="{{ asset('css/homestyle.css') }}" />
@endsection

@section('content')
<div class="content">
    <div class="col-md-6 col-centered">
        <h1 class="title">Summary of Sports Activity in your Area</h1>
        <div class="first-form">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sports</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sub Sports</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>League Type</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group clearfix">
                        <div class="col-xs-5 nopadding">
                            <label>&nbsp;</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col-xs-7 nopadding">
                            <label>Age Group</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group clearfix">
                        <div class="col-xs-5 nopadding">
                            <label>Sum</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col-xs-7 nopadding">
                            <label>Gender</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Organizational Record</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Adaptive</label>
                    </div>
                </div>
            </div>
            <div class="row search-buttons">
                <div class="col-md-3 col-sm-6">
                    <button type="button" class="btn btn-block">Find Field/Facility</button>
                </div>
                <div class="col-md-3 col-sm-6">
                    <button type="button" class="btn btn-block">Find Camp</button>
                </div>
                <div class="col-md-3 col-sm-6">
                    <button type="button" class="btn btn-block">Find Team</button>
                </div>
                <div class="col-md-3 col-sm-6">
                    <button type="button" class="btn btn-block">Find League</button>
                </div>
            </div>
        </div>
        <div class="result-form">
            <div class="row">
                <div class="col-md-8">
                    <div class="result-info">
                        <p class="teams">There are <u>8 Soccer Teams</u><span> Looking</span> for Players in Denver </p>
                        <p class="leagues">There are <u>2 Soccer Leagues</u><span> Looking</span> for Teams in Denver </p>
                        <p class="tournaments">There are <u>12 Tournaments</u> for Players in Denver </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-form">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Team Name to Find"/>
                    </div>
                </div>
            </div>
            <div class="row search-buttons">
                <div class="col-md-3">
                    <button type="button" class="btn btn-block">Team Summary</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block">League Summary</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block">Your Stats/History</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block">Your Home Page</button>
                </div>
            </div>
            <div class="row last-inputs">
                <div class="col-md-6">
                    <div class="form-group clearfix">
                        <div class="col-xs-7 nopadding">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="col-xs-5 nopadding">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group clearfix">
                        <div class="col-xs-7 nopadding">
                            <label for="sports">Your win/loss Record this</label>
                        </div>
                        <div class="col-xs-5 nopadding">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="test-result">
            {{ $sports }}
        </div>
    </div>
</div>
@endsection

@section('exFoot')
<script src="{{ asset('js/angular.min.js') }}"></script><!-- load angular -->
<script src="{{ asset('js/myApp.js') }}"></script>
<script src="{{ asset('js/controllers/mainCtrl.js') }}"></script>
<script src="{{ asset('js/services/commentService.js') }}"></script>
@endsection