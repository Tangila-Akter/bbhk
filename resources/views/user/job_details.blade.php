<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>BBHK High School</title>
    <style>
        .card {
            margin-top: 1rem;
            box-shadow: 4px 4px 4px 1px #00000030;
        }

        .card:hover {
            box-shadow: 5px 2px 12px 6px black;
        }

        .text {
            color: black;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container">

            <div class="card">
                <form action="" method="get">
                    <h5 class="card-header">{{ $data->title }}</h5>
                    <div class="card-body">
                        <p class="text"><b> Vacancy: </b> {{ $data->vacancy }} </p>
                        <p class="text"><b> Job Type: </b> {{ $data->type }} </p>
                        <p class="text"><b> Requirements: </b><br>
                        <article>
                            <pre>
                            {{ $data->requirement }}
                            </pre>
                            <article>
                                </p>
                                <p class="text"><b> Salary: </b> {{ $data->salary }}</p>
                                <p class="text"><b> Working Hours: </b> {{ $data->time }}</p>
                                <p class="text"><b> Holiday: </b> {{ $data->holiday }} </p>
                                <p class="text"><b> Deadline: </b> <span class="red">{{ $data->deadline }}</span></p>
                                <a href="{{ url('job') }}" class="btn btn-danger">Go Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>