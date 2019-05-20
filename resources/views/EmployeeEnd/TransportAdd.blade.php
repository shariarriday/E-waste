<?php
    $val1 = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' ");
    $res2 = DB::connection('oracle')->select("Select * FROM RESEARCH WHERE EMPLOYEE_ID = '$id' ");
    $tran = DB::connection('oracle')->select("Select * FROM Transport WHERE EMPLOYEE_ID = '$id' ");
    $dis = DB::connection('oracle')->select("Select * FROM DISSEMBLER WHERE EMPLOYEE_ID = '$id' ");
    $value = $val1[0]->accesslevel;
    $res = DB::connection('oracle')->select("Select EMPLOYEE_ID FROM RESEARCH");
    $array_researcher[0]=1;
    $i = 0;
    foreach ($res as $re) {
        $array_researcher[$i++] = $re->employee_id;
    }
    $res = DB::connection('oracle')->select("Select EMPLOYEE_ID FROM DISSEMBLER");
    $array_disassembler[0]=1;
    $i = 0;
    foreach ($res as $re) {
        $array_disassembler[$i++] = $re->employee_id;
    }
    $res = DB::connection('oracle')->select("Select EMPLOYEE_ID FROM Transport");
    $array_transport[0]=1;
    $i = 0;
    foreach ($res as $re) {
        $array_transport[$i++] = $re->employee_id;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Waste Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>

    .field{
        --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);
    }

    .field__input{
        background-color: transparent;
        border-radius: 0;
        border: none;

        -webkit-appearance: none;
        -moz-appearance: none;

        font-family: inherit;
        font-size: 1em;
    }

    .field__input:focus::-webkit-input-placeholder{
        color: var(--uiFieldPlaceholderColor);
    }

    .field__input:focus::-moz-placeholder{
        color: var(--uiFieldPlaceholderColor);
        opacity: 1;
    }

    /*
    =====
    LEVEL 2. CORE STYLES
    =====
    */

    .a-field{
        display: inline-block;
    }

    .a-field__input{
        display: block;
        box-sizing: border-box;
        width: 100%;
    }

    .a-field__input:focus{
        outline: none;
    }

    /*
    =====
    LEVEL 3. PRESENTATION STYLES
    =====
    */

    /* a-field */

    .a-field{
        --uiFieldHeight: var(--fieldHeight, 40px);
        --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
        --uiFieldBorderColor: var(--fieldBorderColor);

        --uiFieldFontSize: var(--fieldFontSize, 1em);
        --uiFieldHintFontSize: var(--fieldHintFontSize, 1em);

        --uiFieldPaddingRight: var(--fieldPaddingRight, 15px);
        --uiFieldPaddingBottom: var(--fieldPaddingBottom, 15px);
        --uiFieldPaddingLeft: var(--fieldPaddingLeft, 15px);

        position: relative;
        box-sizing: border-box;
        font-size: var(--uiFieldFontSize);
        padding-top: 1em;
    }

    .a-field .a-field__input{
        height: var(--uiFieldHeight);
        padding: 0 var(--uiFieldPaddingRight) 0 var(--uiFieldPaddingLeft);
        border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColor);
    }

    .a-field .a-field__input::-webkit-input-placeholder{
        opacity: 0;
        transition: opacity .2s ease-out;
    }

    .a-field .a-field__input::-moz-placeholder{
        opacity: 0;
        transition: opacity .2s ease-out;
    }

    .a-field .a-field__input:not(:placeholder-shown) ~ .a-field__label-wrap .a-field__label{
        opacity: 0;
        bottom: var(--uiFieldPaddingBottom);
    }

    .a-field .a-field__input:focus::-webkit-input-placeholder{
        opacity: 1;
        transition-delay: .2s;
    }

    .a-field .a-field__input:focus::-moz-placeholder{
        opacity: 1;
        transition-delay: .2s;
    }

    .a-field .a-field__label-wrap{
        box-sizing: border-box;
        width: 100%;
        height: var(--uiFieldHeight);

        pointer-events: none;
        cursor: text;

        position: absolute;
        bottom: 0;
        left: 0;
    }

    .a-field .a-field__label{
        position: absolute;
        left: var(--uiFieldPaddingLeft);
        bottom: calc(50% - .5em);

        line-height: 1;
        font-size: var(--uiFieldHintFontSize);

        pointer-events: none;
        transition: bottom .2s cubic-bezier(0.9,-0.15, 0.1, 1.15), opacity .2s ease-out;
        will-change: bottom, opacity;
    }

    .a-field .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
        opacity: 1;
        bottom: var(--uiFieldHeight);
    }

    /* a-field_a1 */

    .a-field_a1 .a-field__input{
        transition: border-color .2s ease-out;
        will-change: border-color;
    }

    .a-field_a1 .a-field__input:focus{
        border-color: var(--fieldBorderColorActive);
    }

    /* a-field_a2 */

    .a-field_a2 .a-field__label-wrap:after{
        content: "";
        box-sizing: border-box;
        width: 0;
        height: var(--uiFieldBorderWidth);
        background-color: var(--fieldBorderColorActive);

        position: absolute;
        bottom: 0;
        left: 0;

        will-change: width;
        transition: width .285s ease-out;
    }

    .a-field_a2 .a-field__input:focus ~ .a-field__label-wrap:after{
        width: 100%;
    }

    /* a-field_a3 */

    .a-field_a3{
        padding-top: 1.5em;
    }

    .a-field_a3 .a-field__label-wrap:after{
        content: "";
        box-sizing: border-box;
        width: 100%;
        height: 0;

        opacity: 0;
        border: var(--uiFieldBorderWidth) solid var(--fieldBorderColorActive);

        position: absolute;
        bottom: 0;
        left: 0;

        will-change: opacity, height;
        transition: height .2s ease-out, opacity .2s ease-out;
    }

    .a-field_a3 .a-field__input:focus ~ .a-field__label-wrap:after{
        height: 100%;
        opacity: 1;
    }

    .a-field_a3 .a-field__input:focus ~ .a-field__label-wrap .a-field__label{
        bottom: calc(var(--uiFieldHeight) + .5em);
    }

    /*
    =====
    LEVEL 4. SETTINGS
    =====
    */

    .field{
        --fieldBorderColor: #2c9368;
        --fieldBorderColorActive: #90ee90;
    }


    /* body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        width: 100%;
        background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);
    } */

    /* html {
        font-family: Montserrat-Regular;
        src: url('../fonts/montserrat/Montserrat-Regular.ttf');
    } */

    div {margin-bottom: 3rem;}
    div:last-child {margin-bottom: 0;}


</style>
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c9368;font-family: 'Montserrat', sans-serif;">
    <a class="navbar-brand" href="#">E-waste Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/admin/Info">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/log">Log</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin Options
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/admin/checkEmployee">Check Employee</a>
            <a class="dropdown-item" href="/admin/tasks">Current Tasks</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/admin/addEmployee">Add New Employee</a>
            <a class="dropdown-item" href="/admin/updateEmployee">Update Employee</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/admin/createStation">Add New Dumping Station</a>
            <a class="dropdown-item" href="/admin/viewDump">View Dumping Stations</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Status
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/admin/status">Recycle Status</a>
            <a class="dropdown-item" href="/admin/researchStatus">Research Status</a>
          </div>
        </li>
        @if(count($dis) == 1)
        <li class="nav-item">
          <a class="nav-link" href="/admin/dump">Dump Materials</a>
        </li>
        @endif
        @if(count($res2) == 1)
        <li class="nav-item">
          <a class="nav-link" href="/admin/research">Research</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/admin/updateSelf">Update Information</a>
        </li>
      </ul>
    </div>
  </nav>


    <div class="page" style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 89vh;
    width: 100%;">
    <div class="container" style="text-align: center;">
        <h3>Add Transport</h3>
    </div>
        <form action = "/admin/addTransport" method="POST">
            {{CSRF_FIELD()}}
            <div class="page__demo">
                <input type="hidden" value = "{{$id2}}" name = "pk">
                <label class="field a-field a-field_a1 page__field">
                    <input class="field__input a-field__input" placeholder="AB-1234" name = "vehicle_license" >
                    <span class="a-field__label-wrap">
                        <span class="a-field__label">Vehicle License</span>
                    </span>
                </label>

                <label class="field a-field a-field_a1 page__field">
                    <input class="field__input a-field__input" placeholder="1000" name = "vehicle_capacity" >
                    <span class="a-field__label-wrap">
                        <span class="a-field__label">Vehicle Capacity</span>
                    </span>
                </label>
                <br>
                <label class="field a-field a-field_a1 page__field">
                    <input class="field__input a-field__input" placeholder="Truck" name = "vehicle_type" >
                    <span class="a-field__label-wrap">
                        <span class="a-field__label">Vehicle Type</span>
                    </span>
                </label>
                <label class="field a-field a-field_a1 page__field">
                    <input class="field__input a-field__input" placeholder="Truck" name = "destination" >
                    <span class="a-field__label-wrap">
                        <span class="a-field__label">Destination</span>
                    </span>
                </label>
                <br>
                <div class="container" style="display: flex; justify-content: center; padding-top: 30px">
                    <button type="submit" class="btn btn-outline-secondary">   Submit   </button>
                </div>
            </div>
        </form>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
