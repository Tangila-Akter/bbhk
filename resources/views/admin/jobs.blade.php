<x-app-layout>


</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
  <style>
    th,
    td {
      text-align: left;
      padding: 8px;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

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
        <h1>Job & Vacancies</h1>

        <div style="position: relative; top:20px; right:4px;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Job & Vacancies
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Job & Vacancies</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ url('/uploadjob') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div>
                      <label>Title</label>
                      <input type="text" name="title" class="text" placeholder="Write a title" required>
                    </div>
                    <div>
                      <label>Vacancy</label>
                      <input type="text" id="vacancy" name="vacancy" class="text" placeholder="vacancy" required>

                    </div>
                    <div>
                      <label>Job type</label>
                      <input type="text" name="type" class="text" placeholder="Job type" required>
                    </div>
                    <div>
                      <label>Requirement</label>

                      <textarea type="text" id="requirement" name="requirement" class="text" placeholder="requirement" style="height:200px"></textarea>

                    </div>
                    <div>
                      <label>Salary</label>
                      <input type="text" name="salary" class="text" placeholder="Salary" required>
                    </div>
                    <div>
                      <label>Working hours</label>
                      <input type="text" id="time" name="time" class="text" placeholder="Working hours" required>

                    </div>
                    <div>
                      <label>Holidays</label>
                      <input type="text" name="holiday" class="text" placeholder="holiday" required>
                    </div>
                    <div>
                      <label>Deadline</label>
                      <input type="text" id="deadline" name="deadline" class="text" placeholder="deadline" required>

                    </div>
                    <div>


                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </div>

                </form>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!--Notice View start-->

        <div>
          @if (method_exists($data, 'links'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
          <form action="{{ url('jobsearch') }}" method="get" class="form-inline" style="float:right; margin-right:30px; color:rgb(255, 255, 255);">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="search">
            <input type="submit" value="search" class="btn btn-primary">
          </form>
        </div>


        <div style="overflow-x:auto;     margin-top: 42px;">
          <table class=" table" style="margin-top: 8rem;">
            <thead>
              <tr class=" table-success" style="color: black !important;">
                <th style="padding: 0px">Title</th>
                <th style="padding: 0px">Vacancy</th>
                <th style="padding: 0px">Job type</th>
                <th style="padding: 0px">Requirement</th>
                <th style="padding: 0px">Salary</th>
                <th style="padding: 0px">Working hours</th>
                <th style="padding: 0px">Holidays</th>
                <th style="padding: 0px">Deadline</th>
                <th style="padding: 0px">Action</th>
              </tr>
            </thead>
            @foreach ($data as $data)
            <tbody>
              <tr style="background-color: #ffffff; color:black;" class="item">

                <td style="padding: 0px; text-align:center;">{{ $data->title }}</td>
                <td style="padding: 0px; text-align:center;">{{ $data->vacancy }}</td>
                <td style="padding: 0px; text-align:center;">{{ $data->type }}</td>
                <td style="padding: 0px; text-align:center;">
                  <pre> {{ $data->requirement }}</pre>
                </td>
                <td style="padding: 1px; text-align:center;">{{ $data->salary }}</td>
                <td style="padding: 1px; text-align:center;">{{ $data->time }}</td>
                <td style="padding: 1px; text-align:center;">{{ $data->holiday }}</td>
                <td style="padding: 1px; text-align:center;">{{ $data->deadline }}</td>
                <td style="padding: 0px; text-align:center;"><a class="btn btn-warning" href="{{ url('/deletejob',$data->id) }}">Delete</a><br><a class="btn btn-primary" href="{{ url('/updatejob',$data->id) }}">Edit</a></td>
              </tr>
            </tbody>
            @endforeach

          </table>

        </div>

      </div>

    </div>

  </div>

  </div>

  @include('admin.script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>

</body>

</html>