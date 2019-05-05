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
          <li class="active"><a href="/processor/2">Refurbisher</a></li>
         
        </ul>
      </div>
    </nav>


	<div class="limiter">
                                                                          
    <?php
        $vals = DB::connection('oracle')->select("select * from fixed_products WHERE PROCESSOR_ID= '$id'"); //write any query you need, I am writing to show the //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">PRODUCT_ID</th>
								<th class="column100 column3" data-column="column3">PRODUCT_FROM</th>
								<th class="column100 column4" data-column="column4">PRODUCT_QUALITY</th>
                                <th class="column100 column4" data-column="column5">PRODUCT_WEIGHT</th>
                                <th class="column100 column4" data-column="column6">PRODUCT_WARRENTY</th>
                                <th class="column100 column4" data-column="column7">REPAIR_COST</th>
                                <
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<!--<td class="column100 column1" data-column="column1">{{$val->name}}</td> -->
								<td class="column100 column2" data-column="column2">{{$val->PRODUCT_ID}}</td>
								<td class="column100 column3" data-column="column3">{{$val->PRODUCT_FROM}}</td>
								<td class="column100 column4" data-column="column4">{{$val->PRODUCT_QUALITY}}</td>
                                <td class="column100 column4" data-column="column5">{{$val->PRODUCT_WEIGHT}}</td>
                                <td class="column100 column4" data-column="column6">{{$val->PRODUCT_WARRENTY}}</td>
                                <td class="column100 column4" data-column="column7">{{$val->REPAIR_COST}}</td>
                                

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
