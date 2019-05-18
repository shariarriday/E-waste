@include('header')
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
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
@if($value == 2)
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
@endif

	<div class="limiter">
    <?php
        $vals = DB::connection('oracle')->select("Select * FROM DUMPINGVIEW");
    ?>

		<div class="container-table100">
			<div class="wrap-table100">
                <div style="text-align: center; margin-bottom: 15px;">
                    <h3><b>Dumping log</b></h3>
                </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Type to Filter Dumping History</span>
                </div>
                <input type="text" class="form-control" id="input" aria-describedby="basic-addon3">
              </div>
				<div class="table100 ver2 m-b-110">
					<table id="table" data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Location</th>
								<th class="column100 column2" data-column="column2">Maximum Quantity</th>
								<th class="column100 column3" data-column="column3">Current Quantity</th>
								<th class="column100 column4" data-column="column4">Material</th>
                <th class="column100 column5" data-column="column5">Safety Level</th>
							</tr>
						</thead>

						<tbody>
              @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->loc}}</td>
								<td class="column100 column2" data-column="column2">{{$val->quantity}}</td>
								<td class="column100 column3" data-column="column3">{{$val->curr}}</td>
								<td class="column100 column4" data-column="column4">{{$val->materials}}</td>
                <td class="column100 column4" data-column="column5">{{$val->safety}}</td>
							</tr>
              @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
    <script>
    $('#input').keyup(function () {
      table_search($('#input').val(),$('#table tbody tr'),'01234');
    });
    </script>
	</div>
</body>
</html>
