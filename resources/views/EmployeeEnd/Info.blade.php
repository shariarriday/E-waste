@include('header')
<?php
    $val1 = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' ");
    $res = DB::connection('oracle')->select("Select * FROM RESEARCH WHERE EMPLOYEE_ID = '$id' ");
    $tran = DB::connection('oracle')->select("Select * FROM Transport WHERE EMPLOYEE_ID = '$id' ");
    $dis = DB::connection('oracle')->select("Select * FROM DISSEMBLER WHERE EMPLOYEE_ID = '$id' ");
    $value = $val1[0]->accesslevel;
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
@if($value == 2)
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c9368;font-family: 'Montserrat', sans-serif;">
  <a class="navbar-brand" href="#">E-waste Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/admin/info">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/log">Log</a>
      </li>
      <li class="nav-item dropdown">
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
      @if(count($res) == 1)
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
@endif


@if($value == 1)
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
      @if(count($dis) == 1)
      <li class="nav-item">
        <a class="nav-link" href="/admin/dump">Dump Materials</a>
      </li>
      @endif
      @if(count($res) == 1)
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
@endif

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>

		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2" style = "magin-bottom: 35px;">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Age</th>
								<th class="column100 column3" data-column="column3">Salary</th>
								<th class="column100 column4" data-column="column4">Phone</th>
                <th class="column100 column4" data-column="column5">Email</th>
                <th class="column100 column4" data-column="column6">Password</th>
                <th class="column100 column4" data-column="column7">Status</th>
							</tr>
						</thead>


						<tbody>
              @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->age}}</td>
								<td class="column100 column3" data-column="column3">{{$val->salary}}</td>
								<td class="column100 column4" data-column="column4">{{$val->phone_number}}</td>
                <td class="column100 column4" data-column="column5">{{$val->email}}</td>
                <td class="column100 column4" data-column="column6">{{$val->password}}</td>
                <td class="column100 column4" data-column="column7">@if($vals[0]->status == "busy")
                <a href='/admin/workdone'><button type="button" class="btn btn-dark">Work Completed</button></a>
                @endif</td>
							</tr>
              @endforeach
						</tbody>
					</table>
          @if(count($tran) == 1 && $vals[0]->status == "busy")
          <?php
          $trans = DB::connection('oracle')->select("SELECT * FROM TRANSPORT WHERE EMPLOYEE_ID = '$id'");
          $name;
          $loc;
          $cond;
          if(count($trans) == 1)
          {
              $barcodes = DB::connection('oracle')->select("SELECT BARCODE,CONDITION,LOCATION FROM NEW_ADD WHERE EMPLOYEE = '$id'");
              foreach($barcodes as $barcode)
              {
                  $bar = $barcode->barcode;
                  $check = DB::connection('oracle')->select("SELECT * FROM INVENTORY WHERE BARCODE = '$bar'");
                  if(count($check) == 0)
                  {
                      $cond = $barcode->condition;
                      $loc = $barcode->location;
                      $name = DB::connection('oracle')->select("SELECT * FROM PRODUCTNAME WHERE BARCODE = '$bar'");
                      $name = $name[0]->name;
                  }
                }
          }
          ?>

          <table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Vehicle License</th>
								<th class="column100 column3" data-column="column3">Product Condition</th>
								<th class="column100 column4" data-column="column4">Product Name</th>
                <th class="column100 column5" data-column="column5">Source</th>
                <th class="column100 column7" data-column="column7">Status</th>
							</tr>
						</thead>


						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$vals[0]->name}}</td>
								<td class="column100 column2" data-column="column2">{{$trans[0]->vehicle_license_no}}</td>
								<td class="column100 column3" data-column="column3">{{$cond}}</td>
								<td class="column100 column4" data-column="column4">{{$name}}</td>
                <td class="column100 column4" data-column="column5">{{$loc}}</td>
                <td class="column100 column4" data-column="column7">Busy</td>
              </tr>
						</tbody>
					</table>
          @endif
          @if(count($dis) == 1 && $vals[0]->status == "busy")
          <?php
          $ids = DB::connection('oracle')->select("SELECT * FROM INVENTORY WHERE CHECK_OUT_TO = '$id'");
          $name;
          $loc;
          $cond;
          ?>

          <table data-vertable="ver2">
            <thead>
              <tr class="row100 head">
                <th class="column100 column1" data-column="column1"></th>
                <th class="column100 column2" data-column="column2">Unique ID</th>
                <th class="column100 column3" data-column="column3">Product Condition</th>
                <th class="column100 column4" data-column="column4">Source</th>
                <th class="column100 column5" data-column="column5">Status</th>
              </tr>
            </thead>


            <tbody>
              @foreach($ids as $barcode)
              <?php
              $prod = DB::connection('oracle')->select("SELECT name FROM PRODUCTNAME WHERE BARCODE = '$barcode->barcode'");
              $checks = $barcode->check_out_to;
              $res = "Disassembling";
              $ref = DB::connection('oracle')->select("SELECT * FROM RECYCLING WHERE EMPLOYEE_ID = '$checks' ");
              if(count($ref) > 0)
                    continue;
              ?>
              <tr class="row100">
                <td class="column100 column1" data-column="column1">{{$prod[0]->name}}</td>
                <td class="column100 column2" data-column="column2">{{$barcode->barcode}}</td>
                <td class="column100 column3" data-column="column3">{{$barcode->product_condition}}</td>
                <td class="column100 column4" data-column="column4">{{$barcode->location}}</td>
                <td class="column100 column4" data-column="column5">{{$res}}</td>
              </tr>
              @endforeach
						</tbody>
					</table>
          @endif

				</div>
			</div>
		</div>
	</div>

</body>
</html>
