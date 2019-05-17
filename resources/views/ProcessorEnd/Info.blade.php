@include('header')
<?php
    $val1 = DB::connection('oracle')->select("Select * FROM PROCESSOR WHERE PROCESSOR_ID = '$id' ");
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">E-waste</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="/processor/info">Home</a></li>
          <li><a href="/processor/getInfoInventory">Get Products</a></li>
          <li><a href="/processor/dumping">Dumping</a></li>
          <li><a href="/processor/Products">Products</a></li>
          <li><a href="/processor/RawMaterials">Raw Materials</a></li>
        </ul>
      </div>
    </nav>


	<div class="limiter">
    <?php
        $vals = DB::connection('oracle')->select("SELECT * FROM PROCESSOR WHERE PROCESSOR_ID= '$id' "); //write any query you need, I am writing to show the //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Location</th>
								<th class="column100 column3" data-column="column3">Password</th>
								<th class="column100 column4" data-column="column4">Balance</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->location}}</td>
								<td class="column100 column3" data-column="column3">{{$val->password}}</td>
								<td class="column100 column4" data-column="column4">{{$val->balance}}</td>
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

TO INVENTORY VALUES('',
END;
