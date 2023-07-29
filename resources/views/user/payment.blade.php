<!DOCTYPE html>
<html lang="en">

@include('user.css')

<body>
    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->

    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->

    <!-- Payment Start -->
    <div class="container py-3" id="Notice">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary mb-3">Payment Details</h4>
            </div>
        </div>
    </div>
    <!-- Pament End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
</body>

</html>