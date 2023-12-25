<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Employee page.css" />

    <link rel="shortcut icon" href="img/S1S.png" type="image/png" />

    <title>Employee Page</title>
  </head>
  <body>
    <header>
      <div class="header">
        <nav>
          <img id="icon" src="img/S1S.png" alt="" class="logo" />
          <ul>
                <li><a href="1Services website.html ">الرئيسية</a></li>
                <li><a href="1Services website.html  #section2">نبذة عنا</a></li>
                <li><a href="1Services website.html #text2">الخدمات</a></li>
                <li><a href="1Services website.html #footer">اتصل بنا</a></li>
            <li><a href="#">المعرض</a></li>
            <li><h1>Welcome, [Employee Name]!</h1></li>
            <li><a href="1Services website.html">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section>
      <div class="container">
        <div class="employee-info">
          <h2>معلومات الشخصية</h2>
          <p>رقم الموضف : [Employee ID]</p>
          <p>بريد الاكتروني : [employee@email.com]</p>
          <p>عمل الموظف : [Employee work]</p>
        </div>

        <div class="tasks">
          <h2>الطلبات جاري قيام بية</h2>
          <!-- Display tasks, assignments, or other relevant information here -->
        </div>
      </div>

      <div class="container2">
        <h2>معلومات الطلبات</h2>
        <!-- جدول لعرض طلبات الموظف -->
        <table>
          <thead>
            <tr>
              <th>رقم الطلب</th>
              <th>تفاصيل الطلب</th>
              <th>إجراءات</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>تفاصيل الطلب 1</td>
              <td>
                <button onclick="deleteRequest(1)">حذف</button>
                <button onclick="sendRequest(1)">إرسال</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>تفاصيل الطلب 2</td>
              <td>
                <button onclick="deleteRequest(2)">حذف</button>
                <button onclick="sendRequest(2)">إرسال</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>تفاصيل الطلب 3</td>
              <td>
                <button onclick="deleteRequest(2)">حذف</button>
                <button onclick="sendRequest(2)">إرسال</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>تفاصيل الطلب 4</td>
              <td>
                <button onclick="deleteRequest(2)">حذف</button>
                <button onclick="sendRequest(2)">إرسال</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>تفاصيل الطلب 5</td>
              <td>
                <button onclick="deleteRequest(2)">حذف</button>
                <button onclick="sendRequest(2)">إرسال</button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>تفاصيل الطلب 6</td>
              <td>
                <button onclick="deleteRequest(2)">حذف</button>
                <button onclick="sendRequest(2)">إرسال</button>
              </td>
            </tr>
            <!-- يمكنك إضافة صفوف إضافية حسب الحاجة -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- السكريبت لتنفيذ الإجراءات -->
    <script>
      function deleteRequest(requestNumber) {
        // قم بتنفيذ الكود لحذف الطلب (يمكنك استخدام AJAX لإرسال طلب حذف إلى الخادم)
        alert("تم حذف الطلب رقم " + requestNumber);
      }

      function sendRequest(requestNumber) {
        // قم بتنفيذ الكود لإرسال الطلب (يمكنك استخدام AJAX لإرسال الطلب إلى الخادم)
        alert("تم إرسال الطلب رقم " + requestNumber);
      }
    </script>
  </body>
</html>
