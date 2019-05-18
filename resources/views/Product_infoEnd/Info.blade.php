@include('header')
<?php
    $val1 = DB::connection('oracle')->select("Select * FROM MANUFACTuRER WHERE PROVIDER_ID = '$id' ");
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
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

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Home Electronics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/productinfo/TV">TV</a>
              <a class="dropdown-item" href="/productinfo/AC">Air Conditioner</a>
              <a class="dropdown-item" href="/productinfo/refrigerator">Refrigerator</a>
              <a class="dropdown-item" href="/productinfo/washing_machine">Washing Machine</a>
              <a class="dropdown-item" href="/productinfo/microwave">Microwave</a>

            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Personal Electronics
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/productinfo/tablet">Tablet</a>
                <a class="dropdown-item" href="/productinfo/mobile">Mobile</a>
                <a class="dropdown-item" href="/productinfo/laptop">Laptop</a>
                <a class="dropdown-item" href="/productinfo/camera">Camera</a>
                <a class="dropdown-item" href="/productinfo/radio">Radio</a>
              </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Office Electronics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/productinfo/pc">Computer</a>
            <a class="dropdown-item" href="/productinfo/printer">Printing Machine</a>
            <a class="dropdown-item" href="/productinfo/copy_machine">Copy Machine</a>


          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Other Electronics
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/productinfo/router">Router</a>
            <a class="dropdown-item" href="/productinfo/calculator">Calculator</a>


          </div>
        </li>
        </ul>
      </div>
    </nav>


	<div class="limiter">
    <?php
        $vals = DB::connection('oracle')->select("SELECT * FROM manufacturer WHERE PROVIDER_ID= '$id' "); //write any query you need, I am writing to show the //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Company Representative</th>
								<th class="column100 column2" data-column="column2">Inventory_location</th>
								<th class="column100 column3" data-column="column3">Company Name</th>
								<th class="column100 column4" data-column="column4">Password</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->contact_name}}</td>
								<td class="column100 column2" data-column="column2">{{$val->inventory_location}}</td>
								<td class="column100 column3" data-column="column3">{{$val->name}}</td>
								<td class="column100 column4" data-column="column4">{{$val->password}}</td>
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
