@include('header')
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li class="active"><a href="/buyer/products">Buy Product</a></li>
    <li><a href="/buyer/materials">Buy Materials</a></li>
    </ul>
  </div>
</nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM PRODUCT WHERE PRODUCT_ID NOT IN (SELECT PRODUCT_ID FROM SECOND_HAND_PRODUCT)"); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Barcode</th>
								<th class="column100 column3" data-column="column3">Quality</th>
								<th class="column100 column4" data-column="column4">Warranty</th>
                                <th class="column100 column5" data-column="column5">Price</th>
                                <th class="column100 column7" data-column="column7">Buy</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->product_id}}</td>
								<td class="column100 column2" data-column="column2">{{$val->barcode}}</td>
								<td class="column100 column3" data-column="column3">{{$val->product_quality}}</td>
								<td class="column100 column4" data-column="column4">{{$val->product_warrenty}}</td>
                                <td class="column100 column4" data-column="column5">{{$val->price}}</td>
                                <td class="column100 column4" data-column="column6"><a href ="/buyer/buyProducts/{{$val->product_id}}">Buy</a></td>
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
