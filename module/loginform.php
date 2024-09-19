<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="module/loginform.css">
    <title>Document</title>
</head>

<body>
    <svg class="svg-background" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900"
        preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <g>
            <use xlink:href='#wave' opacity=".3">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                    calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".6">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                    calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".9">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                    calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
        </g>
    </svg>
    <?php
 if (isset($message)) {
     foreach ($message as $message) {
         echo '<span class="error-msg">' . $message . '</span>';
     }
 }
 ?>
    <div class="container">
        <div class="toggle-buttons">
            <button onclick="showForm('admin')">Admin Login</button>
            <button onclick="showForm('client')">Client Login</button>
        </div>
        <div class="slider" id="slider">
            <div class="form-container" id="admin-form">
                <form action="" method="POST">
                    <h1>Admin Login</h1>
                    <label for="email">Enter your Email</label><br>
                    <input type="email" name="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>"
                        required placeholder="email">
                    <label for="password">Enter your Password</label><br>
                    <input type="password" name="password" required placeholder="password">
                    <input type="hidden" name="position" value="1"> <!-- Hidden input for position -->
                    <input type="submit" name="admin_submit" value="login now" class="form-btn">
                    <p>don't have an account? <a href="slidingregis.php">register now</a> or <a href="index.php"
                            style="color: rgb(11, 91, 64)"> BACK </a></p>
                </form>
            </div>
            <div class="form-container" id="client-form">
                <form action="" method="POST">
                    <h1>Client Login</h1>
                    <label for="email">Enter your Email</label><br>
                    <input type="email" name="email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>"
                        required placeholder="email">
                    <label for="password">Enter your Password</label><br>
                    <input type="password" name="password" required placeholder="password">
                    <input type="hidden" name="position" value="2"> <!-- Hidden input for position -->
                    <input type="submit" name="client_submit" value="login now" class="form-btn">
                    <p>don't have an account? <a href="slidingregis.php">register now</a> or <a href="index.php"
                            style="color: rgb(11, 91, 64)"> BACK </a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
    function showForm(formType) {
        const slider = document.getElementById('slider');
        if (formType === 'admin') {
            slider.style.transform = 'translateX(0)';
        } else {
            slider.style.transform = 'translateX(-600px)'; /* Adjusted transform */
        }
    }
    </script>
</body>

</html>