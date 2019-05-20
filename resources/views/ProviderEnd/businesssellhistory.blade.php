@include('header')
<body style="font-family: 'Montserrat', sans-serif; background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c9368; font-family: 'Montserrat', sans-serif;">
      <a class="navbar-brand" href="#">E-waste Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/user/Businesshome">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/businesssellhistory">Sell History<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/businesssellItems">Sell Items <span class="sr-only">(current)</span></a>
          </li>


        </ul>
      </div>
    </nav>



	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM BUSINESS_SELL_HISTORY where PROVIDER_ID ='$id' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
        <!searchbarstart>  <div style="text-align: center; margin-bottom: 15px;">
              <h3><b>Sell History</b></h3>
          </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Type to Filter Log</span>
          </div>
          <input type="text" class="form-control" id="input" aria-describedby="basic-addon3">
        </div> <!searchbarend>
				<div class="table100 ver2 m-b-110">
					<table id =table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
                <th class="column100 column1" data-column="column1">Product Name</th>
								<th class="column100 column2" data-column="column2">Sources</th>
								<th class="column100 column3" data-column="column3">Unique ID</th>
								<th class="column100 column4" data-column="column4">Order Date</th>
								<th class="column100 column5" data-column="column5">Product Condition</th>





							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
                            <?php
                            $prod = DB::connection('oracle')->select("SELECT name FROM PRODUCTNAME WHERE BARCODE = '$val->barcode'");
                                   ?>
							<tr class="row100">
                @if(count($prod)!= 0)
                <td class="column100 column1" data-column="column1">{{$prod[0]->name}}</td>
                  @endif
								<td class="column100 column2" data-column="column2">{{$val->sources}}</td>
								<td class="column100 column3" data-column="column3">{{$val->barcode}}</td>
								<td class="column100 column4" data-column="column4">{{$val->order_date}}</td>
								<td class="column100 column5" data-column="column5">{{$val->product_condition}}</td>


							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
  <script>
  $('#input').keyup(function () {
    table_search($('#input').val(),$('#table tbody tr'),'0123');
  });
  </script>
</body>
</html>
