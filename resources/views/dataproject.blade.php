<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Project</title>
</head>

<body>
    <h1 class="text-center mb-4">Project Monitoring</h1>

    <div class="container">
        <a href="/tambahdata" class="btn btn-success">Tambah +</a>
        <div class="row">
            @if($message = Session::get('succes'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">PROJECT NAME</th>
                        <th scope="col">CLIENT</th>
                        <th scope="col">PROJECT LEADER</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">START DATE</th>
                        <th scope="col">END DATE</th>
                        <th scope="col">PROGRESS</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->project_name }}</td>
                        <td>{{ $row->client }}</td>
                        <td>{{ $row->project_leader }}</td>
                        <td>
                            <img src="{{ asset('fotoProjectLeader/'.$row->foto) }}" alt="" style="width: 50px;">
                        </td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->start_date }}</td>
                        <td>{{ $row->end_date }}</td>
                        <td>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: {{ $row->progress }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $row->progress }}%
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>