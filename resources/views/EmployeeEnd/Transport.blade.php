@include('header')
<?php
    $val1 = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' ");
    $value = $val1[0]->accesslevel;
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
    @if($value > 6)
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">E-waste</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="info">Home</a></li>
          <li><a href="#">Other Employee</a></li>
          <li><a href="researcher">Researcher</a></li>
          <li class="active"><a href="transport">Transport</a></li>
          <li><a href="/admin/transportwork">Transport Works</a></li>
          <li><a href="dumpingemployee">Dumping Stations</a></li>
          <li><a href="#">Recycle Status</a></li>
          <li><a href="addEmployee">Add New Employee</a></li>
        </ul>
      </div>
    </nav>
    @endif

    @if($value < 7)
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">E-waste</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="info">Home</a></li>
          <li class="active"><a href="researcher">Researcher</a></li>
          <li><a href="transport">Transport</a></li>
          <li><a href="dumpingemployee">Dumping Stations</a></li>
        </ul>
      </div>
    </nav>
    @endif

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM VEHICLE_FREE WHERE NAME = '$name' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column3" data-column="column2">Vehicle License</th>
								<th class="column100 column4" data-column="column3">Vehicle Type</th>
                                <th class="column100 column4" data-column="column4">Vehicle Capacity</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->vehicle_license}}</td>
								<td class="column100 column3" data-column="column3">{{$val->vehicle_type}}</td>
								<td class="column100 column4" data-column="column4">{{$val->vehicle_capacity}}</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
