@extends('public.master')
@section('title')
    Client Login
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
        <div class="col-md-6">
            <div class="loginBox">
                <form role="form">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                      <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address">
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon "><i class="fam-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                    </div>
                  </div>
                 
                  <button type="submit" class="btn btn-success">Login <i class="fam-key-go"></i></button>
                <div class="btn-group">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Can't Login? <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fam-lock-break"></i> Password Reminder</a></li>
                        <li><a href="#"><i class="fam-email-error"></i> Email Reminder</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fam-cog"></i> Contact Support</a></li>
                      </ul>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            Info Place holder
        </div>
        <div class="clearfix"></div>
    </div>
@stop