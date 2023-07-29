<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    #more {
        display: none;
    }
</style>

<body>
    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->

    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="width: 1520px; height: 680px;" src="user/img/cur-1.jpg" alt="Image">
                </div>
                @foreach ($data1 as $data1)
                <div class="carousel-item ">
                    <img class="w-100" style="width: 1520px; height: 680px;" src="Carousel/{{$data1->image}}" alt="Image">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container py-3">
        <div class="row">
            @foreach ($data as $data )
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                {{-- <h4 class="text-secondary mb-3">"কিছু কথা"</h4> --}}
                <h4 class="text-secondary mb-3">{{ $data->title }}</h4>
                <article>
                    <h6>{{ $data->name }}</h6>
                    <h6>{{ $data->position }}</h6>
                </article>
                <br>
                <ul class="list-inline">
                    <li>
                        <h6>{{ $data->before }}
                            <span id="dots">...</span><span id="more">
                                {{ $data->after }}
                        </h6>
                    </li>
                </ul>
                <button href="" class="btn btn-lg btn-primary mt-3 px-4" onclick="myFunction()" id="myBtn">Read more</button>
            </div>
            @endforeach

            <div class="col-lg-5">
                <div class="row px-5">
                    <div class="col-10 p-0">
                        <img class="img-fluid w-100" height="400" src="user/img/Mamun.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

</body>

</html>