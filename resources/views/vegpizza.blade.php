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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .vegpizzaitems {
            /* padding-left: 10%; */
        }

        body {
            font-family: cursive;
            background-color: #e6f4fa;
            /* overflow-x: hidden; */
        }

        .card {
            background-color: #e2f2f5;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container">

        <h1 style="text-align: center">Veg Pizza </h1>
        <div class="row">
    
        
        @foreach ($vegpizza_items as $vegitems)
        {{-- <ul> --}}
        {{-- <li>{{$vegpizza_items[0]->vegpizzaitems}}</li> --}}
        {{-- <li>{{$vegpizza_items}}</li> --}}
        {{-- </ul> --}}
        <div class="col-md-3 mt-5">
            <div class="card">
                {{-- <img class="card-img-top" height="200px" width="70px" src="{{asset($vegitems->veg_image)}}" alt="Card image cap"> --}}
                <img class="card-img-top" src="{{asset($vegitems->veg_image)}}" alt="Card image cap">
                <div class="card-body vegpizzaitems">
                    <div class="d-inline-block">
                        <p class="vegpizzaid" hidden>{{$vegitems->id}}</p>
                        {{-- <input type="hidden" id="vegpizzaid_{{$vegitems->id}}" value="{{$vegitems->id}}"> --}}
                        <h5 class="card-title">{{$vegitems->vegpizzaitems}}</h5>
                    </div>
                    <div class="d-inline-block">
                        {{-- <i class="bi bi-heart veglikes"></i> --}}
                        {{-- <i class="fa fa-regular fa fa-heart veglikes"></i> --}}
                        <?php
                                    $colorChanged = "";
                                    $solidChanged = "regular";
                                    if(in_array($vegitems->id,$alreadylikedIds))
                                    {
                                  
                                        $solidChanged = "solid";
                                        $colorChanged = 'style="color: #f80000;"';
                                    }
                                    
                        ?>
                        {{-- <i class="fa fa-regular fa-heart veglikes" style="color: {{$colorChanged}};"></i> --}}
                        <i class="fa-<?= $solidChanged; ?> fa-heart veglikes" <?= $colorChanged; ?>></i>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        {{-- <a href="#" class="btn btn-info vegpizza1" >Add to cart</a> --}}
                        <?php
    
                            // $vegsessionId = '{{ session("user_id") }}';
                            //         // $FoodModal = new Food_model;
                            //         $response=$food_model -> show_added_cart($vegsessionId);
                                    // print_r($alreadyaddedids);
                                    $buttonName = "Add to cart";
                                    $buttonDisabled = "";
                                    if(in_array($vegitems->id,$alreadyaddedids))
                                    {
                                        $buttonName = "Already Added";
                                        $buttonDisabled = "disabled";
                                    }
                        ?>
                        <button type="button" class="btn btn-info vegpizza" {{$buttonDisabled}}
                            changleValue={{$vegitems->id}}>{{$buttonName}}</button>
                    </div>
                    <div>
                        <h5>Price: &#8377;{{$vegitems->vegpizzaprice}}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    </div>
    
    <script>
        var vegpizzasessionId = '{{ session("user_id") }}';
        $(document).ready(function() {
            $(".vegpizza").click(function() {
                var vegpizzaId = $(this).closest('.card-body').find('.vegpizzaid').text();
                // var vegpizzasessionId = $(".vegPizzaSessionId").text();
                // console.log(vegpizzaId);
                // console.log(vegpizzasessionId);
                $.ajax({
                    method: "post",
                    url: "addVegCartItems",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    data: {
                        vegpizzaId: vegpizzaId,
                        vegpizzasessionId: vegpizzasessionId,
                    },
                    success: function(response) {
                        alert(response);
                        window.location.reload();
                    }
                })
            });
            $(".veglikes").click(function() {
                var vegpizzaId = $(this).closest('.card-body').find('.vegpizzaid').text();
                // var vegpizzasessionId = $(".vegPizzaSessionId").text();
                // console.log(vegpizzaId);
                // console.log(vegpizzasessionId);
                $.ajax({
                    method: "post",
                    url: "addVegLikes",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    data: {
                        vegpizzaId: vegpizzaId,
                        vegpizzasessionId: vegpizzasessionId,
                    },
                    success: function(response) {
                        // alert(response);
                        window.location.reload();
                        // console.log(response);
                    }
                })
            });
            var vegpizzaId = $(this).closest('.card-body').find('.vegpizzaid').text();
            // var vegpizzasessionId1 = $(".vegPizzaSessionId").text();
            $.ajax({
                method: "post",
                url: "likeButtons",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                data: {
                    vegpizzasessionId: vegpizzasessionId,
                },
                success: function(response) {
                    // alert(response);
                    console.log(response);
                    // console.log({veg_id: '6'},{veg_id: '7'},{veg_id: '8'},{veg_id: '5'},{veg_id: '3'},{veg_id: '3'});
                    // var data=JSON.parse(response);
                    //     // console.log(response);
                    //     for (var itemId in response) {
                    //     // updateButtonStatus(vegpizzaId, response[itemId]);
                    //     if(vegpizzaId == response[itemId])
                    //         {
                    //             $(".vegpizza").text('Remove from Cart');
                    //         } else {
                    //             $(".vegpizza").text('Add to Cart');
                    //         }
                    // }
                }
            })
        });
    </script>
</body>

</html>