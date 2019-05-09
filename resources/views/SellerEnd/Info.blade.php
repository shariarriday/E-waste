@include('header')
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-waste</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/user/individualsellhistory">Sell History</a></li>
      <li><a href="/user/sellItems">Sell Items</a></li>
    </ul>
  </div>
</nav>

	<div class="limiter">

    <?php
        $vals = DB::connection('oracle')->select("Select * FROM PERSONAL WHERE BUYER_ID = '$id' "); //write any query you need, I am writing to show the                                                                     //employees information
    ?>
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Discount</th>
								<th class="column100 column2" data-column="column2">Payment Type</th>
								<th class="column100 column3" data-column="column3">E-mail</th>
								<th class="column100 column4" data-column="column4">Phone</th>
                                <th class="column100 column5" data-column="column5">Balance</th>
                                  <th class="column100 column6" data-column="column5">Password</th>


							</tr>
						</thead>


						<tbody>
                            @foreach($vals as $val)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$val->discount}}</td>
								<td class="column100 column2" data-column="column2">{{$val->payment_type}}</td>
								<td class="column100 column3" data-column="column3">{{$val->email}}</td>
								<td class="column100 column4" data-column="column4">{{$val->phone}}</td>
                                <td class="column100 column5" data-column="column5">{{$val->balance}}</td>
                                <td class="column100 column6" data-column="column6">{{$val->password}}</td>
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
