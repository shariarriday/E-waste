@include('header')

<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="/processor/info">Home</a></li>
        <li  class="active"><a href="/processor/getInfoInventory">Get Products</a></li>
        <li><a href="/processor/dumping">Dumping</a></li>
        <li ><a href="/processor/Products">Products</a></li>
        <li><a href="/processor/RawMaterials">Raw Materials</a></li>
        <li><a href="/processor/Refurbished">Refurbished Products</a></li>
    </ul>
  </div>
</nav>


	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM Products WHERE CHECK_OUT_TO = '$id' ");
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Price</th>
								<th class="column100 column3" data-column="column3">Product Condition</th>
								<th class="column100 column4" data-column="column4">Product Type</th>
                				<th class="column100 column5" data-column="column6">Refurbish</th>
							</tr>
						</thead>


						<tbody>
                @foreach($vals as $val)
						    <tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->product_name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->product_price}}</td>
								<td class="column100 column3" data-column="column3">{{$val->product_condition}}</td>
								<td class="column100 column4" data-column="column4">{{$val->product_type}}</td>
                <td class="column100 column5" data-column="column5"><a href="/processor/Refurbish/{{$val->inventory_id}}">Refurbish</a></td>
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
