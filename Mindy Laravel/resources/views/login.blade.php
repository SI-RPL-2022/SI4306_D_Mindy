<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="/register/register.css">

    <title>Login</title>
</head>

<body>
        
        <div class="d-flex flex-wrap flex-md-nowrap align-items-center">
            <div class="row" style="background-color: rgba(221, 255, 223, 1); height: 120vh;">
                <img src="/register/orang1.png" height="800" width="600">
            </div>
            
            <div class="row col-5" style="margin-left: 100px;">
                <h2 class="mb-5" style="margin-top: -150px;">Welcome To Mindy</h2>
                <form action="/profile" method="post">
                    @csrf
                <div class="mb-5" style="margin-top: -20px;">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" class="form-control border border-4 border border-dark" id="formGroupExampleInput"
                        placeholder="Email" name="email" autofocus required style="height: 92px; border-radius: 40px;">
                </div>
                <div class="mb-5">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="password" class="form-control border border-4 border border-dark"
                        id="formGroupExampleInput2" placeholder="Password" name="password" required style="height: 92px; border-radius: 40px;">
                </div>
                <div class="d-flex">
                    <input class="btn btn-primary" type="submit" value="Login"
                        style="height: 50px; width: 150px; background-color: rgba(7, 153, 17, 1); border-radius: 30px;">
                </div>
                <p class="mt-3">Don't have account?<a href="/daftar"> Register</a></p>
                <div class="d-flex align-items-center">
                    <a href="/"><img src="/register/back.svg" width="40" height="40" style="margin-left: 250px;"></a>
                    <a href="/"><p style="margin-top: 17px; font-size: 30px; margin-left: 10px; color: black">Back</p></a>
                </div>
                </form>
            </div>
        </div>
        @include('sweetalert::alert')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>