<x-app-layout>


</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style>
    td:hover {
      background-color: #cdc9c9;
      color: #140a0a;
    }

    [type="search"] {
      outline-offset: -2px;
      -webkit-appearance: textfield;
      color: white !important;
    }

    .text {
      color: black;
    }

    .min-h-screen {
      min-height: 0vh !important;
    }
  </style>
</head>

<body>
  <div class="container-scroller">


    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
      <div>
        <h1>Contact us</h1>
        <div style="position: relative; top:20px; right:4px;">

          <!--Notice View start-->
          @if (method_exists($data, 'links'))


          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
          <form action="{{ url('noticesearch') }}" method="get" style="float:right; padding:10px; color:rgb(255, 255, 255);">
            @csrf
            <div>
              <input class="form-control" type="search" name="search" placeholder="search"><input type="submit" value="search" class="btn btn-primary">

            </div>

          </form>
          <div class="id01 table-responsive-sm"></div>
          <table class="id01 table" style="margin-top: 8rem;">
            <thead>
              <tr class="table-success" style="color: black !important;">
                <th style="padding: 20px">Name</th>
                <th style="padding: 20px">Email</th>
                <th style="padding: 20px">Phone Number</th>
                <th style="padding: 20px">Message</th>
                <th style="padding: 20px">Action</th>
              </tr>
            </thead>
            @foreach ($data as $data)
            <tbody>
              <tr style="background-color: #ffffff; color:black;" class="item">
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->msg }}</td>
                <td><a class="btn btn-warning" href="{{ url('/deletecontact',$data->id) }}">Delete</a></td>
              </tr>
            </tbody>
            @endforeach

          </table>



        </div>

      </div>

    </div>
    @if (method_exists($data, 'links'))


    <div class="d-flex justify-content-center">
      {!! $data->links() !!}
    </div>
    @endif
  </div>

  @include('admin.script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>

</body>

</html>