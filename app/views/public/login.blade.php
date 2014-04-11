@extends('public.master')
@section('title')
    Customer Login
@stop
@section('content')
<style>
  #footer{padding-bottom: 50px;}
  @media (max-width: 994px){
  #footer{display: none}
  }
</style>
    <div id="header-btm">

            <div class="container">
                <h4 class="heading-icon clearfix"> <img src="assets/img/icons/heading-icon-tag.png" width="40" height="40" alt="icon" class="icon-small-bg">
                     <?php echo ucfirst(Request::segment(1));?>
                </h4>
            </div>

    </div>
    <div class="container">
        
        <div class="centerdBox">
          
          
          <!-- Show and Hide loginBox, passwordBox, emailBox -->
          <script type="text/javascript">
              $(document).ready(function(){
                $(".passReminder").click(function(){
                  $( ".loginBox" ).effect( "explode", "slow" );
                  $( ".passBox" ).delay(600).show( "explode", "slow" );
                });
                $(".usernameReminder").click(function(){
                  $( ".loginBox" ).effect( "explode", "slow" );
                  $( ".usernameBox" ).delay(600).show( "explode", "slow" );
                });
              });
          </script>
          <!-- Start Login Box -->
            <div class="panel panel-default loginBox">
              <div class="panel-heading">Customer Area</div>
              <div class="panel-body">
                  
                  <form role="form" method="post" action="/login">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  @include('_inc.errors')
                  <div class="form-group">
                    <label for="username">User Name</label>
                    <div class="input-group">
                      <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Enter Your User Name">
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon "><i class="fam-lock"></i></span>
                        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Enter Your Password">
                    </div>
                  </div>
                 
                  <button type="submit" class="btn btn-success">Login <i class="fam-key-go"></i></button>
                <div class="btn-group">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Can't Login? <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#" class="passReminder"><i class="fam-lock-break"></i> Password Reminder</a></li>
                        <li><a href="#" class="usernameReminder"><i class="fam-email-error"></i> User Name Reminder</a></li>
                        <li class="divider"></li>
                        <li><a href="/contactus"><i class="fam-cog"></i> Contact Support</a></li>
                      </ul>
                </div>
                </form>
            
          
              </div>
            </div>
          <!-- End Login Box -->
          <!-- Start Password Box -->
           <div class="panel panel-default passBox">
              <div class="panel-heading">Password Reminder</div>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                      <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                        <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Enter Your Email Address">
                    </div>
                    
                  </div>
                  
                 
                  <button type="submit" class="btn btn-success">Reset Password <i class="fam-lock-go"></i></button>
                
                  <a href="/login"><button type="button" class="btn btn-warning">Go Back <i class="fam-arrow-undo"></i></button></a>
                      
                </form>
              </div>
            </div>
          <!-- End Password Box -->
          <!-- Start username Box -->
           <div class="panel panel-default usernameBox">
              <div class="panel-heading">User Name Reminder</div>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                      <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                        <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Enter Your Email Address">
                    </div>
                    
                  </div>
                  
                 
                  <button type="submit" class="btn btn-success">Send <i class="fam-email-go"></i></button>
                
                  <a href="/login"><button type="button" class="btn btn-warning">Go Back <i class="fam-arrow-undo"></i></button></a>
                      
                </form>
              </div>
            </div>
          <!-- End username Box -->

          </div>
        
    </div>
@stop