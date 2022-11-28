<?php include_once 'header.php'; ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" autocomplete="off">
                </div>
                <div class="field input">
                    <label for="password">Passwrod</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input button">
                    <input type="submit" value="continue to chat">
                </div>

            </form>
            <div class="link">Not yet signed up ? <a href="index.php">Signup Now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>