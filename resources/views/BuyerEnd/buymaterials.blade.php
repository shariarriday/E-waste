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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/buyer/buyProducts">Buy Product<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/buyer/materials">Buy Materials <span class="sr-only">(current)</span></a>
          </li>


        </ul>
      </div>
    </nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM RAW_MATERIAL WHERE LOT_ID NOT IN (SELECT LOT_ID FROM RAW_MATERIAL_SELLING)"); //write any query you need, I am writing to show the                                                                     //employees information
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
					<table id =table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Glass</th>
								<th class="column100 column2" data-column="column2">Gold</th>
								<th class="column100 column3" data-column="column3">Silicon</th>
								<th class="column100 column4" data-column="column4">Rubber</th>
                                <th class="column100 column5" data-column="column5">Plastic</th>
                                <th class="column100 column7" data-column="column7">Copper</th>
                                <th class="column100 column7" data-column="column7">Steel</th>
                                <th class="column100 column7" data-column="column7">Iron</th>
                                <th class="column100 column7" data-column="column7">Price</th>
							</tr>
						</thead>


						<tbody>
                @foreach($vals as $val)

                  		<tr class="row100">

                        <td class="column100 column1" data-column="column1">{{$val->glass}}</td>


								<td class="column100 column2" data-column="column2">{{$val->gold}}</td>
								<td class="column100 column3" data-column="column3">{{$val->silicon}}</td>
								<td class="column100 column4" data-column="column4">{{$val->rubber}}</td>
                                <td class="column100 column5" data-column="column5">{{$val->plastic}}</td>
                                <td class="column100 column6" data-column="column6">{{$val->copper}}</td>
                                <td class="column100 column7" data-column="column7">{{$val->steel}}</td>
                                            <td class="column100 column8" data-column="column8">{{$val->iron}}</td>
                                            <td class="column100 column9" data-column="column9">{{$val->price}}</td>

                                <td class="column100 column10" data-column="column10"><a href ="/buyer/buymaterials/{{$val->lot_id}}">Buy</a></td>
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
