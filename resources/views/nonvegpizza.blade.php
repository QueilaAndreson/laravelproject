<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo config('app.url'); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo config('app.url'); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo config('app.url'); ?>assets/js/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1 style="text-align: center">Non Veg Pizza </h1>
        <div class="row">
            <div class="col-md-3 mt-5">
                <div class="card">
                    {{-- <img class="card-img-top" height="200px" width="70px" src="{{asset($vegitems->veg_image)}}"
                    alt="Card image cap"> --}}
                    <img class="card-img-top" src="assets/images/non_veg/1.png" alt="Card image cap">
                    <div class="card-body vegpizzaitems">
                        <div class="d-inline-block">
                            <p class="vegpizzaid" hidden>id</p>
                            {{-- <input type="hidden" id="vegpizzaid_{{$vegitems->id}}" value="{{$vegitems->id}}"> --}}
                            <h5 class="card-title">Title</h5>
                        </div>
                        <div class="d-inline-block">
                            
                            {{-- <i class="fa fa-regular fa-heart veglikes" style="color: {{$colorChanged}};"></i> --}}
                            <i class="fa-regular fa-heart"></i>
                           
                            <button type="button" class="btn btn-info vegpizza" 
                                changleValue>$buttonName</buton>
                        </div>
                        <div>
                            <h5>Price: &#8377;789</h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    
</body>
</html>