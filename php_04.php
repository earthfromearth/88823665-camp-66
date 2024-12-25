<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>PHP_04</title>
        <body>
           
            <div class="container mt-5">
                <h1>เช็คเลขคู่-คี่</h1>
                <form action="php_04.php" method="post">
                  <label for="inputNum" class="col-sm-5 col-form-label">กรอกจำนวนเลขที่ต้องการตั้งแต่ x - x</label>
                <div class="row g-3">  <!-- กำหนดให้มีการจัดเรียงแบบแถวเดียว และเพิ่มช่องว่างระหว่างคอลัมน์ (g-3 หมายถึง gap 3 ระดับ) -->
                    <div class="col-md-6"> <!-- จัดให้แต่ละช่องกรอกข้อมูลมีขนาด 6 คอลัมน์ในหน้าจอขนาดกลางขึ้นไป (Bootstrap ใช้ Grid System ที่มี 12 คอลัมน์) -->
                    <input type="text" class="form-control" id="firstNum" name="firstNum" placeholder="ตัวอย่าง 19" required>
                    </div>
                    <div class="col-md-6">
                    <input type="text" class="form-control" id="lastNum" name="lastNum" placeholder="ตัวอย่าง 86" required>
                    </div>
                </div>
                <div class="col text-end mt-3">
                <button class="btn btn-success" type="submit">เช็คเลย</button>
                </div>  
                </form>
                <div class="container mt-5">
                    <?php
                    if (isset($_POST['firstNum']) && isset($_POST['lastNum']))  {
                            $fvar = (int)$_POST['firstNum'];
                            $lvar = (int)$_POST['lastNum'];
                            echo "<h3 class='text-center mt-4'>ผลลัพท์เลขคู่-คี่ทั้งหมด:</h3>";

                            for($i=$fvar; $i <= $lvar; $i++){
                                ?>
                                <div class = "row">
                                    <div class="h2 col text-end"><?php echo "เลข".$i ; ?></div>
                                    <div class="h2 col text-start"><?php if($i%2==0){echo "จำนวนคู่";}else{echo "จำนวนคี่";}; ?></div>
                                </div>
                                <?php
                            }
                    }

                    ?>
                </div>
            </div>
        </body>
    </head>
</html>