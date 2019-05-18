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
            <a class="nav-link" href="/user/manufacturerinventoryhistory">Inventory History<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            
            <a class="nav-link" href="/user/sellItems">Sell Items <span class="sr-only">(current)</span></a>
          </li>

        </ul>
      </div>
    </nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM MANUFACTURER WHERE PROVIDER_ID = '$id' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Provider ID</th>
								<th class="column100 column2" data-column="column2">Contact Name</th>
								<th class="column100 column3" data-column="column3">Inventory Location</th>
								<th class="column100 column4" data-column="column4">Name</th>
                                <th class="column100 column5" data-column="column5">Location</th>
                                <th class="column100 column7" data-column="column7">Password</th>
							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->provider_id}}</td>
								<td class="column100 column2" data-column="column2">{{$val->contact_name}}</td>
								<td class="column100 column3" data-column="column3">{{$val->inventory_location}}</td>
								<td class="column100 column4" data-column="column4">{{$val->name}}</td>
                                <td class="column100 column4" data-column="column5">{{$val->location}}</td>
                                <td class="column100 column4" data-column="column6">{{$val->password}}</td>
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
