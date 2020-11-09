<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boring</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row justify-content-center text-white">
            <div class="col-md text-center">
                <div class="card bg-warning" style="width: 25rem;">
                    <div class="card-header h5">Bored To Do </div>
                    <ul class="list-group  list-group-flush">
                        <li class="list-group-item list-group-item-warning"><b>Activity: </b>{{ $data['activity'] }}</li>
                        <li class="list-group-item list-group-item-warning"><b>Type:</b> {{ $data['type'] }}</li>
                        <li class="list-group-item list-group-item-warning"><b>Participants:</b> {{ $data['participants'] }}</li>
                        <li class="list-group-item list-group-item-warning"><b>Price: </b>{{ $data['price'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
