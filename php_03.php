<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <body>
            <title>PHP_03</title>
            <div class="container mt-5">
        <h1>ตารางแม่สูตรคูณ</h1>
        <!-- Form Input -->
        <form action="php_03.php" method="post"> <!-- ส่งข้อมูลไป php_03.php และ ใช้ HTTP POST ในการส่งข้อมูล -->
            <div class="row mb-3">
                <label for="inputnum" class="col-sm-5 col-form-label">เลขแม่สูตรคูณ:</label>   
                <input type="input" class="form-control" id="inputnum" name="inputnum" placeholder="กรอกเลขที่ต้องการสร้างตารางแม่สูตรคูณ" required>
            </div>
            <div class="mt-4">
                <button class="btn btn-success" type="submit">สร้าง</button>
            </div>
        </form>
        <div class="container mt-4">
        <?php
            if (isset($_POST['inputnum'])) {  //ตรวจสอบค่า
                $myvar = (int)$_POST['inputnum']; 
                echo "<h3 class='text-center mt-4'>ตารางสูตรคูณของแม่ $myvar:</h3>";
                echo "<table class='table table-bordered table-striped mt-3'>"; //สร้างตาราง , table-bordered เพิ่มเส้นขอบรอบตาราง , table-striped สลับสีแถวเพื่อให้อ่านง่ายขึ้น , mt-เพิ่มระยะห่างด้านบน
                echo "<thead class='table-success'><tr><th>สูตร</th><th>ผลลัพธ์</th></tr></thead><tbody>"; // เพิ่มสีให้หัวข้อตาราง thead table-success, tr สร้างแถว, th สร้างหัวข้อคอลัม
                
                for ($i = 1; $i <= 12; $i++) {
                    $ans = $myvar * $i;
                    echo "<tr><td>$myvar x $i</td><td>$ans</td></tr>"; //เพิ่มแถว tr, td เพิ่มข้อมูลลงในคอลัม
                }
                echo "</tbody></table>";
            }
            ?>
        </div>
    </div>
        </body>
    </head>
</html>