@include('header')
 <?php
    $val1 = DB::connection('oracle')->select("Select * FROM MANUFACTuRER WHERE PROVIDER_ID = '$id' ");
    $val2 = $val1[0]->provider_id;
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c9368; font-family: 'Montserrat', sans-serif;">
      <a class="navbar-brand" href="/product_info/{{$val2}}">E-waste Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/product_info/{{$val2}}">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home Electronics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/productinfo/TV/{{$val2}}">TV</a>
              <a class="dropdown-item" href="/productinfo/AC/{{$val2}}">Air Conditioner</a>
              <a class="dropdown-item" href="/productinfo/refrigerator/{{$val2}}">Refrigerator</a>
              <a class="dropdown-item" href="/productinfo/washing_machine/{{$val2}}">Washing Machine</a>
              <a class="dropdown-item" href="/productinfo/microwave/{{$val2}}">Microwave</a>

            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Personal Electronics
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/productinfo/tablet/{{$val2}}">Tablet</a>
                <a class="dropdown-item" href="/productinfo/mobile/{{$val2}}">Mobile</a>
                <a class="dropdown-item" href="/productinfo/laptop/{{$val2}}">Laptop</a>
                <a class="dropdown-item" href="/productinfo/camera/{{$val2}}">Camera</a>
                <a class="dropdown-item" href="/productinfo/radio/{{$val2}}">Radio</a>
              </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Office Electronics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/productinfo/pc/{{$val2}}">Computer</a>
            <a class="dropdown-item" href="/productinfo/printer/{{$val2}}">Printing Machine</a>
            <a class="dropdown-item" href="/productinfo/copy_machine/{{$val2}}">Copy Machine</a>


          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Other Electronics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/productinfo/router/{{$val2}}">Router</a>
            <a class="dropdown-item" href="/productinfo/calculator/{{$val2}}">Calculator</a>


          </div>
          <li class="nav-item">
          <a class="nav-link"   href="/product_info/add/UniqueID">Add Unique-ID</a>
        </li>
        <li class="nav-item">
        <a class="nav-link"  href="/product_info/logout">Log Out</a>
    </li>
        </ul>
      </div>
      </nav>


	<div class="limiter">
    <?php
        $vals = DB::connection('oracle')->select("SELECT * FROM manufacturer WHERE PROVIDER_ID= '$id' ");
        $vals3 = DB::connection('oracle')->select("SELECT * FROM provided_products JOIN Product_info USING (model_no) WHERE provider_id = '$id' ");
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
                <div style="text-align: center; margin-bottom: 15px;">
                    <h3><b>Employee Log</b></h3>
                </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Type to Filter Products</span>
                </div>
                <input type="text" class="form-control" id="input" aria-describedby="basic-addon3">
              </div>

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Company Representative</th>
								<th class="column100 column2" data-column="column2">Inventory location</th>
								<th class="column100 column3" data-column="column3">Company Name</th>
								<th class="column100 column4" data-column="column4">Password</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->contact_name}}</td>
								<td class="column100 column1" data-column="column1">{{$val->inventory_location}}</td>
								<td class="column100 column1" data-column="column1">{{$val->name}}</td>
								<td class="column100 column1" data-column="column1">{{$val->password}}</td>
							</tr>
                            @endforeach
						</tbody>
                    <table>
                    <table id = "table" data-vertable="ver2">
            <thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Product Name</th>
								<th class="column100 column1" data-column="column1">Product Type</th>
								<th class="column100 column1" data-column="column1">Price</th>
								<th class="column100 column1" data-column="column1">Model Number</th>
							</tr>
						</thead>

            <tbody>
                            @foreach($vals3 as $val)
              <tr class="row100">
                <td class="column100 column1" data-column="column1">{{$val->product_name}}</td>
                <td class="column100 column1" data-column="column1">{{$val->product_type}}</td>
                <td class="column100 column1" data-column="column1">{{$val->product_price}}</td>
                <td class="column100 column1" data-column="column1">{{$val->model_no}}</td>
              </tr>
                            @endforeach
            </tbody>

					</table>
				</div>
			</div>
		</div>
        <script>
        $('#input').keyup(function () {
          table_search($('#input').val(),$('#table tbody tr'),'0123');
        });
        </script>
	</div>
</body>
</html>
