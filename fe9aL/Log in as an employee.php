<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Log in as an employee.css" />
    <link rel="shortcut icon" href="img/S1S.png" type="image/png" />
    <title>Employee Login</title>
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
            <form id="employee-login-form" method="POST" action="">
                <h2>Employee Login</h2>

                <!-- Employee ID -->
                <label for="employeeId">رقم الموظف:</label>
                <input type="text" id="employeeId" name="employeeId" required />

                <!-- Employee Password -->
                <label for="employeePassword">كلمة المرور:</label>
                <input type="password" id="employeePassword" name="employeePassword" required />

                <!-- Submit Button -->
                <button type="submit">تسجيل الدخول</button>
            </form>

            <!-- Links -->
            <ul>
                <li><a href="Create an employee account.php">إنشاء حساب موظف جديد</a></li>
                <li><a href="#">نسيت كلمة المرور</a></li>
            </ul>

            <!-- PHP Code -->
            <?php
            include_once 'db_connection.php';

            // تحقق من وجود طلب POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $employeeId = $_POST['employeeId'];
                $employeePassword = $_POST['employeePassword'];

                // استعلام للتحقق من صحة بيانات تسجيل الدخول
                $query = "SELECT * FROM Employees WHERE employee_id = ? LIMIT 1";
                $stmt = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt, "s", $employeeId);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                // التحقق من نجاح الاستعلام وعرض رسائل مناسبة
                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    if (password_verify($employeePassword, $row['employee_password'])) {
                         // تحديد صفحة الانتقال بعد تسجيل الدخول
                         header('Location:Employee page.php');
                         exit(); // تأكد من إيقاف تنفيذ البرنامج بعد التوجيه

                    } else {
                        echo "<div class='error-message' id='#InvalidPassword'>خطأ في كلمة المرور.</div>";
                    }
                } else {
                    echo "<div class='error-message' id='InvalidEmployeeID'>خطأ في رقم الموظف.</div>";
                }

                // إغلاق الاستعلام
                mysqli_stmt_close($stmt);

                // إغلاق اتصال قاعدة البيانات
                mysqli_close($connection);
            }
            ?>
        </div>
    </section>
</body>
</html>
