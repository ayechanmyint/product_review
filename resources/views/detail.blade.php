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
                        <div class="col-lg-8 offset-lg-2">
                            <div class="d-flex py-2">
                              
                             <h2>Detail Product </h2> 
                             
                            </div>
                         <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                        <tr>
                                        
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Review</th>
                                        <th scope="col">Votes</th>
                                        <th scope="col">Action</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                  
                                        <tr>                                      
                                        <td>{{$product->product_name}} </td>
                                        <td>{{$product->review}}</td>
                                        <td>{{$product->votes}}</td>
                                        <td><a href="/products/edit/{{$product->id}}">Edit</a></td>
                                       </tr>
                                    
                                    </tbody>
                                </table>
                                <form action="/products/vote" method="post">
                                    @csrf
                                    <input type="hidden" name="pro_id" value='{{$product->id}}'>
                                    <button type="submit" name="upvote" value=1>upvote</button>
                                    <button type="submit" name="downvote" value=0>downvote</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <a href="/products" class="btn btn-default"> << Back </a>
                </div>
            </div>
        </div>
    
    </body>
</html>
