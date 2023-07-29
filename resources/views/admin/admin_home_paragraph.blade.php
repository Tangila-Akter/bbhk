
<x-app-layout>

  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>  
    .table td img {
    width: 200px !important;
    height: 200px !important;
    border-radius:0% !important; 
    }
   td:hover{
  background-color: #cdc9c9;
  color: #140a0a;
}
    [type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
  color: white !important;
}
.text{
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
        <h1>Home Paragraph</h1>
<div style="position: relative; top:20px; right:5px;">
  <!-- Button trigger modal -->


  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Home Paragraph
  </button>
  
   <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add home paragraph</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/uploadhome_paragraph') }}" method="post" enctype="multipart/form-data">
                @csrf

               <div>

                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="text" placeholder="Write a title" required>
                  </div>
                  <div>
                    <label>Name</label>
                    <input type="text" id="name" name="name" class="text" placeholder="Write a name" required>

                  </div>
                  <div>
                    <label>Position</label>
                    <input type="text" name="position" class="text" placeholder="position.." required>
                  </div>
                  <div>
                    <label>Before more</label>
                    <textarea type="text" id="name" name="before" class="text" placeholder="Paragraph before more button.." rows="3" style="height: 200px; width:90%;" required></textarea>

                  </div>
                  <div>
                    <label>After more</label>
                    <textarea type="text" name="after" class="text" placeholder="Paragraph after more button.." rows="3" style="height: 200px; width:90%;" required></textarea>
                  </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <input  type="submit"  class="btn btn-primary" value="Save">
                   </div>
               </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>
<br>
<!--home paragraph View start-->
<div style="overflow-x:auto;     margin-top: 42px;" class="col-lg-4">
    <table class=" table" style="margin-top: 2rem;">
      <thead>
        <tr class=" table-success" style="color: black !important;">
            <th style="padding: 20px">Title</th>
            <th style="padding: 20px">Name</th>
            <th style="padding: 20px">Position</th>
            <th style="padding: 20px">Before more</th>
            <th style="padding: 20px">After more</th>
            <th style="padding: 20px">Action</th>
        </tr>
      </thead>
      @foreach ($data as $data)
      <tbody>
        <tr style="background-color: #ffffff; color:black;" class="item">
            <td>{{ $data->title }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->position }}</td>
            <td  style="width: 20%;">{{ $data->before }}</td>
            <td  style="width: 20%;">{{ $data->after }}</td>
            <td><a class="btn btn-warning" href="{{ url('/deletehome_paragraph',$data->id) }}">Delete</a></td>
         
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
      $(document).ready( function () {
            $('#table_id').DataTable();
        } );
      </script>

  </body>
</html>


{{-- ============================
<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @include('admin.css')
    <style>  
    .table td img {
    width: 200px !important;
    height: 200px !important;
    border-radius:0% !important; 
    }
   td:hover{
  background-color: #cdc9c9;
  color: #140a0a;
}
    [type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
  color: white !important;
}
.text{
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
        <h1>home paragraph</h1>
<div style="position: relative; top:20px; right:8px;">
  <!-- Button trigger modal -->


  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add home paragraph
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add home paragraph</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/uploadhome_paragraph') }}" method="post" enctype="multipart/form-data">
                @csrf

               <div>

                <div>
                    <label>Title</label>
                    <input type="text" name="title" class="text" placeholder="Write a title" required>
                  </div>
                  <div>
                    <label>Name</label>
                    <input type="text" id="name" name="name" class="text" placeholder="Write a name" required>

                  </div>
                  <div>
                    <label>Position</label>
                    <input type="text" name="position" class="text" placeholder="position.." required>
                  </div>
                  <div>
                    <label>Before more</label>
                    <textarea type="text" id="name" name="before" class="text" placeholder="Paragraph before more button.." rows="3" style="height: 200px; width:90%;" required></textarea>

                  </div>
                  <div>
                    <label>After more</label>
                    <textarea type="text" name="after" class="text" placeholder="Paragraph after more button.." rows="3" style="height: 200px; width:90%;" required></textarea>
                  </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <input  type="submit"  class="btn btn-primary" value="Save">
                   </div>
               </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>
<br>
<!--home paragraph View start-->
<div style="overflow-x:auto;     margin-top: 42px;" class="col-lg-12">
    <table class=" table" style="margin-top: 2rem;">
      <thead>
        <tr class=" table-success" style="color: black !important;">
            <th style="padding: 20px">Title</th>
                <th style="padding: 20px">Name</th>
                <th style="padding: 20px">Position</th>
                <th style="padding: 20px">Before more</th>
                <th style="padding: 20px">After more</th>
                <th style="padding: 20px">Action</th>
        </tr>
      </thead>
      @foreach ($data as $data)
      <tbody>
        <tr style="background-color: #ffffff; color:black;" class="item">
            <td>{{ $data->title }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->position }}</td>
            <td  style="width: 20%;">{{ $data->before }}</td>
            <td  style="width: 20%;">{{ $data->after }}</td>
            <td><a class="btn btn-warning" href="{{ url('/deletehome_paragraph',$data->id) }}">Delete</a></td> 
         
        </tr>
      </tbody>
      @endforeach

    </table>

  </div>
{{-- <div class="col-lg-6 grid-margin stretch-card" style="margin-top: 4rem;">
<div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <div class="table-responsive">
        <table class="table ">
          <thead>
            <tr>
                <th style="padding: 20px">Title</th>
                <th style="padding: 20px">Name</th>
                <th style="padding: 20px">Position</th>
                <th style="padding: 20px">Before more</th>
                <th style="padding: 20px">After more</th>
                <th style="padding: 20px">Action</th>
            </tr>
          </thead>
          @foreach ($data as $data)
    <tbody>
        <tr style="background-color: #ffffff; color:black;" class="item">
            
            <td>{{ $data->title }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->position }}</td>
            <td  style="width: 20%;">{{ $data->before }}</td>
            <td  style="width: 20%;">{{ $data->after }}</td>
            <td><a class="btn btn-warning" href="{{ url('/deletehome_paragraph',$data->id) }}">Delete</a></td> 
        </tr>
      </tbody>
    @endforeach
        </table>
      </div>
    </div>
  </div>
    </div>

</div> --}}

  {{-- </div>
  
    </div>
    @if (method_exists($data, 'links'))
          
        
    <div class="d-flex justify-content-center">
{!! $data->links() !!}
    </div>
    @endif
</div>

    @include('admin.script')
    <script type="text/javascript">
      $(document).ready( function () {
            $('#table_id').DataTable();
        } );
      </script>

  </body>
</html> --}} --}}
