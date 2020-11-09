<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boring</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" mt-5">
                <div class="card mb-3 bg-warning" style="width: 20rem;">
                    <div class="card-header">
                        Bored ToDo
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['activity'] }}</h5>
                        <div class="card-text"><b>Type:</b> {{ $data['type'] }}</div>
                        <div class="card-text"><b>Participants:</b> {{ $data['participants'] }}
                        </div>
                        <div class="card-text mb-3"><b>Price:</b> {{ $data['price'] }}</div>
                        <a href="/" class="btn btn-secondary">New ToDo</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Footer -->
    </div>
    
</body>

</html>
