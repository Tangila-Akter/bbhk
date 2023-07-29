<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    .form1 {
        color: black;
        width: 100%;
        border-radius: 10px;
        background-color: #dee2e6;
        padding: 17px;
    }

    input[type=text],
    select,
    textarea {
        color: black;
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=email] {
        color: black;
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    @media (max-width: 991.98px) {
        .px-3 {
            padding-left: 8rem !important;
        }
    }
</style>

<body>
    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->

    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container py-3" id="Notice">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary">Contact Us</h4>
                <div class="row contact">
                    <form class="form1" action="{{ url('/uploadcontact') }}" method="post" enctype="multipart/form-data" data-aos="fade-right">
                        @csrf
                        <label>Name:</label>
                        <input type="text" name="name" placeholder="your name" class="box"><br><br>
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="your email" class="box"><br><br>
                        <label>Phone Number:</label>
                        <input type="text" name="phone" placeholder="your phone number" class="box"><br><br>
                        <label>Message:</label>
                        <textarea name="msg" class="box address" placeholder="Write something.." style="height:100px"></textarea><br><br>
                        <input type="submit" value="submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
</body>

</html>