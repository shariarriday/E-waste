@include('header')
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="info">Home</a></li>
      <li class="active"><a href="#">Other Employee</a></li>
      <li><a href="researcher">Researcher</a></li>
      <li><a href="#">Transport</a></li>
      <li><a href="#">Dumping Stations</a></li>
      <li><a href="#">Recycle Status</a></li>
    </ul>
  </div>
</nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select DISTINCT * FROM EMPLOYEE_CHECK");
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Age</th>
								<th class="column100 column3" data-column="column3">Salary</th>
								<th class="column100 column4" data-column="column4">Phone</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->age}}</td>
								<td class="column100 column3" data-column="column3">{{$val->salary}}</td>
								<td class="column100 column4" data-column="column4">{{$val->phone}}</td>
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
