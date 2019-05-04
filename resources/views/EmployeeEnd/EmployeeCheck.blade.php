@include('header')
<?php
    $val1 = DB::connection('oracle')->select("Select * FROM EMPLOYEE WHERE EMPLOYEE_ID = '$id' ");
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
@if($value > 6)
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="info">Home</a></li>
      <li class="active"><a href="#">Other Employee</a></li>
      <li><a href="/admin/researcher">Researcher</a></li>
      <li><a href="/admin/transport">Transport</a></li>
      <li><a href="/admin/transportwork">Transport Works</a></li>
      <li><a href="/admin/dumpingemployee">Dumping Stations</a></li>
      <li><a href="#">Recycle Status</a></li>
      <li><a href="/admin/addEmployee">Add New Employee</a></li>
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
      <li><a href="/admin/info">Home</a></li>
      <li><a href="/admin/researcher">Researcher</a></li>
      <li><a href="/admin/transport">Transport</a></li>
      <li><a href="/admin/dumpingemployee">Dumping Stations</a></li>
    </ul>
  </div>
</nav>
@endif
	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM EMPLOYEE_CHECK WHERE ACCESSLEVEL < $value ");
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
                                <th class="column100 column4" data-column="column5">Transport</th>
                                <th class="column100 column4" data-column="column6">Research</th>
                                <th class="column100 column4" data-column="column7">Disassembly</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->age}}</td>
								<td class="column100 column3" data-column="column3">{{$val->salary}}</td>
								<td class="column100 column4" data-column="column4">{{$val->phone}}</td>
                                @if(count($array_transport) > 0 && !in_array($val->id ,$array_transport))
                                <td class="column100 column4" data-column="column5"><a href="/admin/addTransport/{{$val->id}}">Add to Transport</a></td>
                                @else
                                <td class="column100 column4" data-column="column5"><a href="/admin/removeTransport/{{$val->id}}">Remove Transport</a></td>
                                @endif
                                @if(count($array_researcher) > 0 && !in_array($val->id ,$array_researcher))
                                <td class="column100 column4" data-column="column6"><a href="/admin/addResearch/{{$val->id}}">Add to Research</a></td>
                                @else
                                <td class="column100 column4" data-column="column5"><a href="/admin/removeResearch/{{$val->id}}">Remove from Research</a></td>
                                @endif
                                @if(count($array_disassembler) > 0 && !in_array($val->id ,$array_disassembler))
                                <td class="column100 column4" data-column="column7"><a href="/admin/addDisassembler/{{$val->id}}">Add to Disassembly</a></td>
                                @else
                                <td class="column100 column4" data-column="column5"><a href="/admin/removeDisassembler/{{$val->id}}">Remove from Disassembly</a></td>
                                @endif
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
