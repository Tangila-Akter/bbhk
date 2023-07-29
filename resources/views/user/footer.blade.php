<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">BBHK </span>High School</h1>
            @foreach ($data2 as $data2)
            <p class="m-0">
                {{ $data2->paragraph }}
            </p>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-12 mb-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-primary mb-4">Get In Touch</h4>
                    <p><i class="fa fa-phone mr-2"></i>+8801715737966</p>
                    <p><i class="fa fa-envelope mr-2"></i>bbhkhs@gmail.com</p>
                    <p><i class="fa fa-map-marker mr-2"></i>পোরকরা, সোনাইমুড়ী, নোয়াখালী ।</p>
                    <div class="" style="text-align: center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-4 px-0" style="width: 36px; height: 36px;" target="_blank" href="https://www.facebook.com/profile.php?id=100063672934942"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-4 px-0" style="width: 36px; height: 36px;" target="_blank" href="https://www.youtube.com/@bhuiyarbazarhanufakhatunhi2431"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-4 px-0" style="width: 36px; height: 36px;" target="_blank" href="https://twitter.com/MarufBillahAdi"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center px-0" style="width: 36px; height: 36px;" target="_blank" href="https://www.linkedin.com/in/maruf-billah-adi/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-5 text-center">
            <div class="col-md-12">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{ url('home') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="{{ url('about') }}"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="{{ url('contact') }}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-white py-4 px-sm-3 px-md-5 col-md-12 text-md-center mb-3 mb-md-0" style="background: #111111;">
        &copy; <a class="text-white font-weight-bold" href="https://www.facebook.com/profile.php?id=100063672934942">BBHK High School</a> All Rights Reserved. Developed by <a class="text-white font-weight-bold" href="https://www.facebook.com/tangila.akter.1694"> Tangila Akter.</a> Created by
        <a class="text-white font-weight-bold" href="https://knackflair.com/">Knackflair</a>
    </p>
</div>