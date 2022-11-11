<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationships : Relasi One to One & Many To Many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://wa.me/089687351874">Valentinus Moreno</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Nomor Telepon</th>
                            <th>Posts</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $no=>$user)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone->phone }}</td>
                            <td>
                                <a href="{{ url('posts') }}" class="btn btn-sm btn-success me-2">Go To Posts</a>
                            </td>
                            <td>
                                @foreach ($user->roles()->get() as $role)
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>