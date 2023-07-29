<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    @media (max-width: 991.98px) {
        .pic {
            width: 305px !important;
            height: 679px !important;
        }
    }

    .pic {
        width: 1000px !important;
        height: 900px !important;
    }
</style>

<body>
    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->

    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->

    <!-- Calender Start -->
    <div class="container py-3" id="Notice">
        <div class="row">
            <h4 class="text-secondary mb-3">Academic Calendar</h4><br>
            @foreach ($data as $data)
            <img class="img-fluid w-100 pic" src="calender/{{ $data->image }}" alt="">
            @endforeach
        </div>
    </div>
    </div>
    <!-- Calender End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
</body>

</html>