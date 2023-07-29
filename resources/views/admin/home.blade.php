<x-app-layout>


</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.css')
  <style>
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
        <h1>Welcome to Admin panel!</h1>
      </div>
    </div>

    @include('admin.script')
</body>

</html>