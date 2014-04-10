@extends('public.master')
@section('title')
    Portfolio
@stop
@section('content')
    {{ HTML::style('assets/plugins/adipoli/css/adipoli.css') }}
    {{ HTML::script('assets/plugins/adipoli/js/jquery.adipoli.js') }}
    <div id="header-btm">

            <div class="container">
                <h4 class="heading-icon clearfix"> <img src="assets/img/icons/heading-icon-tag.png" width="40" height="40" alt="icon" class="icon-small-bg">
                     <?php echo ucfirst(Request::segment(1));?>
                </h4>
            </div>

    </div>
    <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
              <img class="imsageHover" src="assets/img/website1.png" style="width:100%;" alt="...">
            </a>
          </div>
          ...
        </div>
    </div>
    <script>
    $('.imageHover').adipoli({
        'startEffect' : 'overlay',
        'hoverEffect' : 'foldLeft'

    });
    </script>
@stop