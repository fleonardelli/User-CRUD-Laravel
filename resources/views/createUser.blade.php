<!DOCTYPE html>
<html>
  <head>
    <title>
    CRUD example
    </title>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
  </head>
  <body>
    <div class="container">
      <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
          </div>
          <div class="panel-body" >
            <form method="post" action="#">
              <div class="form-group">
                <label for="name" class="control-label col-md-4"> Name*</label>
                <div class="controls col-md-8 ">
                  <input class="form-control" id="name" maxlength="50" name="name" placeholder="Name" type="text" required />
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="control-label col-md-4"> Email*</label>
                <div class="controls col-md-8 ">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="mail" required />
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label col-md-4"> Password*</label>
                <div class="controls col-md-8 ">
                  <input class="form-control" id="password" name="password" placeholder="****" type="password" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8 ">
                  <input type="submit" class="btn btn-primary"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/global.js') }}"></script>
</body>
</html>