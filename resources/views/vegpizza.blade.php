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
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .vegpizzaitems {
            /* padding-left: 10%; */
        }

        body {
            font-family: cursive;
            background-color: #e6f4fa;
            overflow-x: hidden;
        }

        .card {
            background-color: #e2f2f5;
            text-align: center;
        }
    </style>

</head>

<body>
    <h1 style="text-align: center">Veg Pizza </h1>
    @foreach ($vegpizza_items as $vegitems)
    {{-- <ul> --}}
        {{-- <li>{{$vegpizza_items[0]->vegpizzaitems}}</li> --}}
        {{-- <li>{{$vegpizza_items}}</li> --}}
    {{-- </ul> --}}
    <div class="col-sm-5 d-inline-block" style="width: 24%;padding: 1%;">
        <div class="card">
            <img class="card-img-top" src="http://localhost/laravelproject/assets/images/p1.png"
                alt="Card image cap">
            <div class="card-body vegpizzaitems">
                <div class="d-inline-block">
                    <p class="vegpizzaid" hidden>{{$vegitems->id}}</p>
                    <h5 class="card-title">{{$vegitems->vegpizzaitems}}</h5>
                </div>
                <div class="d-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-heart" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    {{-- <a href="#" class="btn btn-info vegpizza1" >Add to cart</a> --}}
                    <button type="button" class="btn btn-info vegpizza">Add to Cart</button>
                </div>
                <div>
                    <h5>Price: &#8377;{{$vegitems->vegpizzaprice}}</h5>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="vegpizza_session">
            <p  class="vegPizzaSessionId">{{ session("user_id") }}</p>
    </div> --}}
    
    <script>
        
        $(".vegpizza").click(function(){
            var vegpizzaId = $(this).closest('.card-body').find('.vegpizzaid').text();
            var vegpizzasessionId = <?php echo session("user_id")?>;
            // console.log(vegpizzaId);
            // console.log(vegpizzasessionId);
            $.ajax({
                method : "post",
                url : "addVegCartItems",
                headers : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data : {
                    vegpizzaId : vegpizzaId,
                    vegpizzasessionId : vegpizzasessionId,
                },
                success:function(response){
                    console.log(response);
                }
            })
        });
        
    
    </script>
</body>

</html>