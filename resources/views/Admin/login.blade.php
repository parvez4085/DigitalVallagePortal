<!DOCTYPE html>
<html lang="en">

<head>

    @include('Admin.includes.head')
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                 
                <div class="card o-hidden border-0 shadow-lg my-5">
                
                    <div class="card-body p-0">
                    <a href="{{url('/')}}" class="btn  mt-2"><span class="fa fa-arrow-left"></span>&nbsp;Go To Home</a>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                @if(Session::has('errMsg'))
                                    <div class="alert alert-danger"> {{session('errMsg')}} </div>
                                @endif 
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Here!!!</h1>
                                    </div>
                                    <form action="{{url('adminloginpost')}}" method="post" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @if($errors->has('email'))
		            		                        <span style='color:red'>{{$errors->first('email')}}</span>
		        	                            @endif<br>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                                @if($errors->has('password'))
		            		                        <span style='color:red'>{{$errors->first('password')}}</span>
		        	                            @endif<br>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('admin.includes.foot')

</body>

</html>