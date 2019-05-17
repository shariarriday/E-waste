<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-waste Management System</title><! login after processor selection >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);
    }
    .login-container{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .login-form-1{
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        background: #fff;
    }
    .login-form-1 h3{
        text-align: center;
        color: #10b47d;
    }
    .login-form-2{
        padding: 5%;
        background: #10b47d;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }
    .login-form-2 h3{
        text-align: center;
        color: #fff;
    }
    .login-container form{
        padding: 10%;
    }
    .btnSubmit
    {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        border: none;
        cursor: pointer;
    }
    .login-form-1 .btnSubmit{
        font-weight: 600;
        color: #fff;
        background-color: #10b47d;
    }
    .login-form-2 .btnSubmit{
        font-weight: 600;
        color: #10b47d;
        background-color: #fff;
    }
    .login-form-2 .ForgetPwd{
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }
    .login-form-1 .ForgetPwd{
        color: #10b47d;
        font-weight: 600;
        text-decoration: none;
    }

</style>
</head>

<body>

    <div class="container login-container">
        <div class="row">
            <div class="col-md-4 login-form-1">
                <h3>Login for Manufacturer </h3>
                <form action = "/user/home" method = "post">
                    {{CSRF_FIELD()}}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" name = "email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" name="pass" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="/user/ManufacturerReg" class="ForgetPwd">Create Account</a>
                    </div>
                </form>
            </div>
            <div class="col-md-4 login-form-2">
                <h3>Login for Individual</h3>
                  <form action = "/user/Individualhome" method = "post">
                    {{CSRF_FIELD()}}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" name = "email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" name = "pass" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="/user/IndividualReg" class="ForgetPwd" value="Login">Create Account</a>
                    </div>
                </form>
            </div>
            <div class="col-md-4 login-form-1">
                <h3>Login for Business </h3>
              <form action = "/user/Businesshome" method = "post">
                    {{CSRF_FIELD()}}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" name="pass" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">

                        <a href="/user/BusinessReg" class="ForgetPwd" value="Login">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
