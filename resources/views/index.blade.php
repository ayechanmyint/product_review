<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Post</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container-fluid px-4 py-4">
        <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="d-flex py-2">
                        <h2> Product List </h2>           
                    </div>
                 <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                         <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $x=>$product)
                                <tr>
                                   <td>{{++$x}}</td>
                                   <td>{{$product->product_name}}</td>
                                   <td><a href="products/show/{{$product->id}}">Detail</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>
 <div class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="d-flex py-4">    
            <a href="products/create" class="btn btn-info" role="button">Add New</a>
        </div>
    </div>
 </div>   

        
</div>


</body>
</html>
