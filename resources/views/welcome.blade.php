<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <div class="display-3 align-content-center"> Certificate Generator</div>

    <div class="row mb-3">
        <div class="lead">Many past students have requested a copy of their certificates again.</div>

    </div>

    <div class="row mb-3">
        <div class="lead">If you have completed a course with the Irish Mindfulness Institute within the last 7 years,
            we now
            have a facility where you can obtain a copy of your certificate of completion by email.
        </div>
    </div>

    <div class="row mb-3">
        <div class="lead">Please enter the email you used when purchasing your course. We will then check our database
            and if we find this email, we will email you a certificate representing the course that you completed.
        </div>
    </div>


    <div class="mb-3">

        <p>

        <div class="row">


            <form action="/cert/email" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="jdoe@gmail.com">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

        </p>
    </div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
