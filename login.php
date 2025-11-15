<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ورود به حساب کاربری گیم‌شاپ - خرید و فروش اکانت بازی اورجینال">
    <title>ورود | گیم‌شاپ</title>
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" href="./image/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include 'heder.php';?>

    <section class="login-section">
        <div class="login-container">
            <h2>ورود به حساب کاربری</h2>
            <form class="login-form" onsubmit="event.preventDefault(); alert('ورود با موفقیت انجام شد!');">
                <div class="input-group">
                    <label for="username">نام کاربری</label>
                    <input type="text" id="username" placeholder="مثال: gamer123" required>
                </div>

                <div class="input-group">
                    <label for="password">رمز عبور</label>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>

                <div class="options">
                    <label><input type="checkbox" id="remember"> مرا به خاطر بسپار</label>
                    <a href="#" class="forgot-pass">رمز عبور را فراموش کردید؟</a>
                </div>

                <button type="submit" class="btn primary">ورود</button>
            </form>

        </div>
    </section>
    <?php include 'footer.php';?>

</body>
</html>