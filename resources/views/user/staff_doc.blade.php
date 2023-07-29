<!DOCTYPE html>
<html lang="en">

@include('user.css')
<style>
    .icon {
        float: right;
    }

    th {
        background-color: #65C178 !important;
        color: white;
        padding: 2px;

        height: 52px;
    }

    table {
        width: 96% !important;
    }

    .display {
        width: 100% !important;
    }
</style>

<body>
    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->

    <!-- Navbar Start -->
    @include('user.navbar')
    <!-- Navbar End -->

    <!-- Staff Start -->
    <div class="container py-3" id="Notice">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h4 class="text-secondary mb-3">Staffs Documents</h4>
                @if (method_exists($data, 'links'))
                <div class="d-flex ">
                    {!! $data->links() !!}
                </div>
                @endif
                <form action="{{ url('staffssearch') }}" method="get" class="form-inline" style="float:left;  ">
                    @csrf
                    <input class="form-control" type="search" name="search" placeholder="search">
                    <input type="submit" value="search" class="btn btn-primary">
                </form><br>
                <table class="display">
                    <thead>
                        <tr>
                            <th>Staffs Documents</th>
                            <th>Date
                            </th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    @foreach ($data as $data)
                    <tbody>
                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->date }}
                            </td>
                            <td>
                                <a href="{{ url('staffs_view') }}/{{ $data->id }}" target="_blank rel=" noopener noreferrer" class="icon">
                                    <i class="fa fa-eye" align="center"></i></a>
                                <a href="{{ url('staffs_download') }}/{{ $data->image }}" rel="noopener noreferrer" class="icon">
                                    <i class="fa fa-download" align="center"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Staff End -->

    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    @include('user.script')
</body>

</html>