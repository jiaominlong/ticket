@extends('vo/layout')
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('static/css/meetingplace.css')}}">
@show


@section('content')
    @include('vo/component/side_nav')
    @include('vo/component/top_navigation')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>会场设置<small>编写会场信息</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                            <form action="add_meetingplace" method="post" id="demo-form" data-parsley-validate class="form-horizontal form-label-left" novalidate="">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">会场名称<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="meetingplaseName" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div id="area-group">
                                    <div class="form-group repeat-item">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">区域信息<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="col-md-3 col-sm-3 col-xs-12 no-padding">
                                                <input type="text" class="form-control" name="area_name[]" required="required" id="inputSuccess2" placeholder="区域名称">
                                            </div>
                                            <label for="" class="control-label label-left">区域有</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12 form-group no-padding">
                                                <input type="text" class="form-control" name="seat_number[]" required="required" id="inputSuccess3" placeholder="位置个数">
                                            </div>
                                            <label for="" class="control-label label-left">个位置</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <div class="col-md-3 col-md-offset-3">
                                        <span class="btn btn-default btn-add" >添加元素</span>
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">取消</button>
                                        <button class="btn btn-primary" type="reset">重置</button>
                                        <button type="submit" class="btn btn-success">提交</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@stop

@section('javascript')
    <script src="{{ URL::asset('/static/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('/static/js/add_meetingplace.js') }}"></script>
@stop
