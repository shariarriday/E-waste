@include('header')
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="otherEmployee">Other Employee</a></li>
      <li><a href="searchResearcher">Researcher</a></li>
      <li><a href="transport">Transport</a></li>
      <li><a href="dumpingemployee">Dumping Stations</a></li>
      <li><a href="#">Recycle Status</a></li>
      <li><a href="addEmployee">Add New Employee</a></li>
    </ul>
  </div>
</nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' "); //write any query you need, I am writing to show the                                                                     //employees information
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
                                <th class="column100 column4" data-column="column5">Email</th>
                                <th class="column100 column4" data-column="column6">Password</th>
                                <th class="column100 column4" data-column="column7">Access Level</th>
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
                                <td class="column100 column4" data-column="column7">{{$val->accesslevel}}</td>
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
