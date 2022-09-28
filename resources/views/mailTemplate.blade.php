<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mail Template</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Hello, {{$user_name}}</h4>
                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                <a href="http://127.0.0.1:8000/">demo link</a>
                <p>Thank you for using our application!</p>
                <br>
                <p>Regards</p>
                <p>Mamun</p>
            </div>
        </div>
    </div>
</body>
</html>
