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

    <!-- Admission Start -->
    <div class="container py-3" id="Notice">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary">Admission</h4><br>
                <h5 class="headline">ADMISSION</h5>
                <p class="text">
                    The minimum age requirement for the entry level classes is as bellow: <br>
                    Class VI: Minimum 11+, Class VII: Minimum 12+, <br>Class VIII: Minimum 13+
                    & Class IX:Minimum 14+.
                <ol type="1" class="text">
                    <li>Students who came from other schools to admit from Class Five to upper-level
                        classes; needs to go through an oral/ written examination to confirm the admission.</li>
                    <li>The academic year is from January to December. Admission for a new academic year
                        starts from the month of November and shall end by June. Re-admission for a new
                        academic year is starting just after the final exam and shall end by 1st week of
                        February. After this time an old student has to take new admission</li>
                    <li>Documents Requirement: The documents listed in the admission form will have to be
                        provided by the parent(s)/guardian during admission.</li>
                    <li>Any discount (as per set quota) in re/admission fee & monthly tuition fee for
                        financially challenged families shall be given with written approval from
                        management.</li>
                </ol>
                </p>
            </div>
        </div>
    </div>
    <!-- Admission End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
</body>

</html>