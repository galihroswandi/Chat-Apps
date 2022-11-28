<?php include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form signUp">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="firstName">First Name</label>
                        <input type="text" name="fname" id="firstName" placeholder="Firts Name" autocomplete="off">
                    </div>
                    <div class="field input">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lname" id="lastName" placeholder="Last Name" autocomplete="off">
                    </div>
                </div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off">
                </div>
                <div class="field input">
                    <label for="password">Passwrod</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="img">Select Image</label>
                    <input type="file" id="img" name="image">
                </div>
                <div class="field input button">
                    <input type="submit" value="continue to chat">
                </div>

            </form>
            <div class="link">Already signed up ? <a href="login.php">Login Now</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>