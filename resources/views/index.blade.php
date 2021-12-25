<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show All</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pagin {}

    </style>
</head>

<body>
    <table class="table mx-auto mt-5" style="width:80rem">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Result</th>
                <th scope="col">Client ID</th>
                <th scope="col">Regesterd at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->result }}</td>
                    <td>{{ $item->client_id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href={{ url('qr-code/' . $item->client_id) }} target='_blank'>
                            <button class="btn btn-primary"> مشاهدة</button>
                        </a>
                        <a href={{ url('edit/' . $item->client_id) }} target='_blank'>
                            <button class="btn btn-primary"> تعديل</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
