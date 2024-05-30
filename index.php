<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <title>Welcome to creamistCafe!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CreamistCafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#order">Order</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Gallary/pizza.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pizza</h5>
                    <p>“Slice of Heaven on Every Plate.”</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Gallary/icecream2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ice-cream</h5>
                    <p>Add Some Sweetness to Your Day: Choose Our Catchy Treats"</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Gallary/french fries.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>French fries</h5>
                    <p>Crispy, golden perfection in every bite.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="my-5" id="about">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/food_plate.png" alt="" class="img-fluid">

                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Why choose us?</h2>
                    <p class="py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab atque, ipsam cum commodi consequuntur voluptatum laborum, amet ratione magnam ducimus, officia eius itaque dignissimos blanditiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo molestiae similique porro repudiandae nam corrupti, optio dolorum cumque, ducimus recusandae fugiat, illum nihil eligendi! Sunt.</p>
                    <a href="#order" class="btn btn-outline-success">Order now</a>
                </div>

            </div>
        </div>

    </section>

    <section class="my-5" id="menu">
        <div class="py-5">
            <h2 class="text-center">Menu</h2>
        </div>
        <div class="container-fluid pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/Biryani.jpg" class="card-img-top pb-3 galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Biryani</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/burger.jpg" class="card-img-top galleryimg pb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Burger</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/chocolate.jpg" class="card-img-top galleryimg pb-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Chocolate</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/coffee.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Coffee</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/hot dog.jpg" class="card-img-top pb-3 galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Hot dog</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/Icecream.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Icecream</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/juice.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">juice</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 pb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/lasgana.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Lasgana</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/spanchi.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Spanchi</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/pasta.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Pasta</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/pizza.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">Pizza</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/menu/sandwitch.jpg" class="card-img-top galleryimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title itemname">sandwitch</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur vero nulla iusto eligendi. Aliquam, eos.</p>
                            <a href="#order" class="btn btn-outline-primary">Order now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="my-5" id="review">
        <div class="py-5">
            <h2 class="text-center">Review</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Review/per1.jpg" class="card-img-top reviewimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Franklin Sierra</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odit praesentium, asperiores fugiat aut corporis odio voluptatum iusto repellendus delectus quam laboriosam fuga a aliquid.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Review/per2.jpg" class="card-img-top reviewimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dakota Robinson</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odit praesentium, asperiores fugiat aut corporis odio voluptatum iusto repellendus delectus quam laboriosam fuga a aliquid.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Review/per3.jpg" class="card-img-top reviewimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alexandra Cano</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odit praesentium, asperiores fugiat aut corporis odio voluptatum iusto repellendus delectus quam laboriosam fuga a aliquid.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Review/per4.jpg" class="card-img-top reviewimg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Melanie Noble</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque odit praesentium, asperiores fugiat aut corporis odio voluptatum iusto repellendus delectus quam laboriosam fuga a aliquid.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5" id="order">
        <div class="py-5">
            <h2 class="text-center">Order</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/Order/order.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 m-auto">
                    <form action="userinfo.php" method="post">
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input type="text" name="username" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="phone">Mob no.</label>
                            <input type="text" name="mobile" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="Your order">Your Order</label>
                            <input type="text" name="orderItem" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="quantity">quantity</label>
                            <input type="text" name="quantity" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3" onclick="showalert()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
    function showalert(){
        alert("Success! Your order placed successfully.")
    }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>