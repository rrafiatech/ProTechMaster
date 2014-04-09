<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/styles/fam-icons.css') }}



    {{ HTML::script('assets/js/jquery.min.js') }}
    {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}

    
</head>
<body>
	<section class="container" style="margin-top:10%">
		<!-- Start Login Box -->
		<form role="form">
		<div id="myModal" class="modal show">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        
			        <h4 class="modal-title">Login</h4>
			      </div>
			      <div class="modal-body">
			        
				
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
                	<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                		        
			      </div>
			      <div class="modal-footer">
			        ProTechMaster
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		</form>	
          <!-- End Login Box -->
		
		
	</section>
    
</body>
</html>