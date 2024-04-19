<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ContactUs</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../style1.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" type="img/x-icon" href="../logoM.png">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body class="bg-dark">
        <div class="container">
         <header>
            <div class="nav container">
                <i class='bx bx-menu' id="menu-icon"></i>
                <a href="#" class="logo">Miracle<span>Motors</span></a>
                <ul class="navbar">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="gallery.html">Vehicle</a></li>
                    <li><a href="Aboutus">Aboutus</a></li>
                    <li><a href="#" class="active">Contact</a></li>
                    <li><a href="accounts/login.php">Login</a></li>
                    <li><a href="accounts/signup.php">Sign up</a></li>
                </ul>

                <i class='bx bx-search' id="search-icon"></i>
                <iv class="search-box container">
                    <input type="search" name="" id="" placeholder="Search here....">
                </iv>
            </div>
        </header>
        </div>
        <div class="container text-bg-dark p-3">
            <div class="row, mt-5 text-center">
            <p class="fw-bold text-danger bg-dark fs-3">Contact Us</p>
            
            </div>
        </div>

        <div class="container p-3 mb-2 bg-secondary text-dark">
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <H5><b>Send us a message</b></H5>
                        </div>
                        <div class="card-body">
                            <!--<div class="alert alert-success" role="alert"></div>-->
                            <form method="POST" action="{{route('contact.send')}}">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                    </div>
                                <div class="mb-3 row">
                                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Phone" class="form-control"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="msg" class="form-label">Message</label>
                                    <textarea name="msg" class="form-control"></textarea>
                                </div></br>
                                <button type="submit" class="btn btn-primary text-right">Send</button>&nbsp &nbsp
                                <button type="submit" class="btn btn-warning text-right">Clear</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <H5><b>Get in touch with us</b></H5>
                        </div>
                        <div class="card-body">                    
                        <p>Feel free to give us a call or email regarding any additional information.
                           Our Help Desk Agents will assist you ASAP within office hours.</p>
                            <p><b>Office Hours </b></br>
                            Week Days : 9.00a.m. - 5.00p.m.</p>
                            Saturday  : 9.00a.m. - 1.00p.m.</p>
                            <h4>Address:</h4>Miracle Motors | Bambalapitiya Drive, Galle Road, Colombo 04.</br></br>
                            <h4>Telephone:</h4>+9411 227 8457</br></br>
                            <h4>Email:</h4>info.miraclemoto@gmail.com
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </br>
        <div class="container">
            <div class="row">
                <div class="ratio map" style="--bs-aspect-ratio: 20%;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.029534119409!2d79.85613511409531!3d6.887065820742275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc4a53b13f3%3A0xdebd2abb5d05ba11!2s4-1%2F1%20Bambalapitiya%20Dr%2C%20Colombo%2000400!5e0!3m2!1sen!2slk!4v1658522174208!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </iframe>
                </div>            
            </div>
        </div>
        <?php require 'webFooter.php';?>
        <script src="../js/main.js"></script>              
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>