<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <section class="form signUp">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="" id="" placeholder="Firts Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="" id="" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="" id="" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Passwrod</label>
                    <input type="password" name="" id="" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field input button">
                    <input type="submit" value="continue to chat">
                </div>

            </form>
            <div class="link">Already signed up ? <a href="#">Login Now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>