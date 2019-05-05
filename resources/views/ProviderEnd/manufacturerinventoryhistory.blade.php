@include('header')
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/user/Individualhome">Home</a></li>
      
    </ul>
  </div>
</nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM MANUFACTURER_INVENTORY_HISTORY where PROVIDER_ID ='$id' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Barcode</th>
								<th class="column100 column2" data-column="column2">Check-In To</th>
								<th class="column100 column3" data-column="column3">Check-Out To</th>
								<th class="column100 column4" data-column="column4">Check-In Date</th>
                			<th class="column100 column4" data-column="column4">Check-Out Date</th>
                      			<th class="column100 column4" data-column="column4">Location</th>
                            		<th class="column100 column4" data-column="column4">Product Condition</th>





							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->barcode}}</td>
								<td class="column100 column2" data-column="column2">{{$val->check_in_to}}</td>
								<td class="column100 column3" data-column="column3">{{$val->check_out_to}}</td>
								<td class="column100 column4" data-column="column4">{{$val->check_in_date}}</td>
                						<td class="column100 column4" data-column="column4">{{$val->check_out_date}}</td>
                            <td class="column100 column4" data-column="column4">{{$val->location}}</td>
                            <td class="column100 column4" data-column="column4">{{$val->product_condition}}</td>


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
