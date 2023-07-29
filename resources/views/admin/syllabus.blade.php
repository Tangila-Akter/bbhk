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
        <h1>Syllabus Board</h1>
        <div style="position: relative; top:20px; right:4px;">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Syllabus
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add syllabus</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{ url('/uploadsyllabus') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div>
                      <label>Title</label>
                      <input type="text" name="title" class="text" placeholder="Write a title" required>
                    </div>
                    <div>
                      <label>Date</label>
                      <input type="text" id="date" name="date" class="text" placeholder="dd/mm/yyyy" required>

                    </div>
                    <div>

                      <div>
                        <label>File (pdf,word,images,zip):</label>
                        <input type="file" name="filename" required>
                      </div>
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
        <form action="{{ url('syllabussearch') }}" method="get" class="form-inline" style="float:right; padding:10px; color:rgb(255, 255, 255);">
          @csrf
          <input class="form-control" type="search" name="search" placeholder="search">
          <input type="submit" value="search" class="btn btn-primary">
        </form>
        <div class="id01 table-responsive-sm"></div>
        <table class="id01 table" style="margin-top: 8rem;">
          <thead>
            <tr class="table-success" style="color: black !important;">
              <th style="padding: 20px">Title</th>
              <th style="padding: 20px">Date</th>
              <th style="padding: 20px">File</th>
              <th style="padding: 20px">Action</th>
            </tr>
          </thead>
          @foreach ($data as $data)
          <tbody>
            <tr style="background-color: #ffffff; color:black;" class="item">
              <td>{{ $data->title }}</td>
              <td>{{ $data->date }}</td>
              <td>{{ $data->image }}</td>
              <td><a class="btn btn-warning" href="{{ url('/deletesyllabus',$data->id) }}">Delete</a>&nbsp<a class="btn btn-primary" href="{{ url('/updatesyllabus',$data->id) }}">Edit</a></td>
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