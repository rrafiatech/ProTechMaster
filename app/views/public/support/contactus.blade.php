@extends('public.master')
@section('title')
    Contact us
@stop
@section('content')
    <div id="header-btm">

            <div class="container">
                <h4 class="heading-icon clearfix"> <img src="assets/img/icons/heading-icon-tag.png" width="40" height="40" alt="icon" class="icon-small-bg">
                     <?php echo ucfirst(Request::segment(1));?>
                </h4>
            </div>

    </div>
    <div class="container">
        <div class="col-md-3">
            @include('public.support.supportMenu')
        </div>
        <div class="col-md-9">
            Contact us Place Holder
        </div>
        <div class="clearfix"></div>
    </div>
@stop