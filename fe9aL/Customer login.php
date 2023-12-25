

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Customer login.css" />
    <link rel="shortcut icon" href="img/S1S.png" type="image/png" />

    <title>Customer Login</title>
  </head>
  <body>
    <header>
      <nav>
        <img id="icon" src="img/S1S.png" alt="" class="logo" />
        <ul>
          <li><a href="1Services website.html ">الرئيسية</a></li>
          <li><a href="1Services website.html  #section2">نبذة عنا</a></li>
          <li><a href="1Services website.html #text2">الخدمات</a></li>
          <li><a href="1Services website.html #footer">اتصل بنا</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div class="container">
        <form id="login-form">
          <h2>Customer Login</h2>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />

          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />

          <button type="submit">Login</button>
        </form>
        <ul>
          <li>
            <a href="Create a customer account.php">Create a account</a>
          </li>
          <li><a href="#">I forgot the password</a></li>
        </ul>
        
      </div>
    </section>
  </body>
</html>
<?php
include_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج بيانات تسجيل الدخول من النموذج HTML
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];

    // استعلام لفحص صحة اسم المستخدم وكلمة المرور
    $login_query = "SELECT * FROM accounts WHERE username='$login_username' AND password='$login_password'";
    $result = $conn->query($login_query);

    if ($result->num_rows > 0) {
        echo "تم تسجيل الدخول بنجاح!";
        // يمكنك هنا توجيه المستخدم إلى صفحة معينة بعد تسجيل الدخول
    } else {
        echo "فشل تسجيل الدخول. الرجاء التحقق من اسم المستخدم وكلمة المرور.";
    }
}
$conn->close();
?>
