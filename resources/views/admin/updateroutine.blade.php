<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">

  @include("admin.css")
  <style>
    body {
      background: #191c24;
      color: white;
    }

    a:link {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container-scroller">


    <div style="position: relative; top:60px; right:-150px;">
      <h1>Update Routine</h1>
      <form action="{{ url('/update_routine',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf


        <div>
          <label>Title</label>
          <input type="text" name="title" class="text" value="{{ $data->title }}" placeholder="Write a title" required>
        </div>
        <div>
          <label>Date</label>
          <input type="text" id="date" name="date" class="text" value="{{ $data->date }}" placeholder="dd/mm/yyyy" required>

        </div>
        <div>
          <div>

            <img height="200" width="200" src="routine/{{ $data->image }}" hidden>
          </div>
          <div>
            <label>File (pdf,word,images,zip):</label>
            <input type="file" name="image" value="{{ $data->image }}">
          </div>
          <a href="{{ url('/admin_routine') }}">
            <button type="button" class="btn btn-secondary">Go Back</button>
          </a>

          <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </div>

    </form>

  </div>
  </div>
  @include("admin.script")

</body>

</html>