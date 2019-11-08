<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    </head>
    <body>
    <div class="container-fluid px-4 py-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="d-flex py-2">
                    <h2> Product Review Create </h2>           
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('/products/store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Product Name :</label>
                                    <input class="form-control" type="text" placeholder="Product Name input" name="product_name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Review Detail :</label>
                                    <input class="form-control" type="text" placeholder="Review" name="review">
                       
                                </div>

                         <button type="submit" class="btn btn-primary">Submit</button>
                        </form>                        
                    </div>
                </div>
                <a href="/products" class="btn btn-default"> << Back </a>
            </div>
            
        </div>

    </div> 
    </body>
</html>
