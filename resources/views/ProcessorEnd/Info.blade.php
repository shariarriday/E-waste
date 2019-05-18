@include('header')
<?php
$val1 = DB::connection('oracle')->select("Select * FROM PROCESSOR WHERE PROCESSOR_ID = '$id' ");
$rec = DB::connection('oracle')->select("Select * FROM RECYCLER WHERE PROCESSOR_ID = '$id' ");
$ref = DB::connection('oracle')->select("Select * FROM REFURBISHER WHERE PROCESSOR_ID = '$id' ");
?>
<body style="background-image: linear-gradient(-25deg, #FFFFFF 0%, #C0C0C0 100%);">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c9368; font-family: 'Montserrat', sans-serif;">
        <a class="navbar-brand" href="/admin">E-waste Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="/processor/home">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/processor/Dump">Dumping <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recycling
                    </a>
                    @if(count($rec))
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" href="#">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/processor/rawMaterial">Make Raw Material</a>
                    </div>
                    @else
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/processor/registerRecycler">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Make Raw Material</a>
                    </div>
                    @endif
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Refurbishing
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(count($ref))
                        <a class="dropdown-item disabled" href="#">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " href="/processor/getInfoInventory">Get Product</a>
                        <a class="dropdown-item" href="/processor/Products">Make Product</a>
                        @else
                        <a class="dropdown-item" href="/processor/registerRefurbisher">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Get Product</a>
                        <a class="dropdown-item disabled" href="#">Make Product</a>
                        @endif
                    </div>
                </li>

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
