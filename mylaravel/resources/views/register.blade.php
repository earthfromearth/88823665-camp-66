@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" onsubmit="return clickme()" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback">
                                Ok
                            </div>
                            <div class="invalid-feedback" id="invalid-name">
                                Please sign your username.
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="valid-feedback">
                                Ok
                            </div>
                            <div class="invalid-feedback" id="invalid-email">
                                Please sign your email.
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="valid-feedback">
                                Ok
                            </div>
                            <div class="invalid-feedback" id="invalid-password">
                                Please sign your password.
                            </div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="mycheckbox" />
                                    <label class="form-check-label" for="mycheckbox">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                    <div class="valid-feedback">
                                        Ok
                                    </div>
                                    <div class="invalid-feedback" id="invalid-mycheckbox">
                                        Please aceept.
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <button class="btn" onclick="clickme()">Click me</button>
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="{{ url('/login') }}" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    console.log("hello world!");
    //Alert("Hello World!")
</script>
<script>

    //alert("Hello World!")

    let mylar

    var myvar2

    const PI=3.14

    pi = 2

    console.log(PI, pi)

    let myarray = [];
     myarray = Array()

    myarray[0] = 1
    myarray["1"] = 2
    myarray.push(3)
    myarray.push(4)
    console.log(myarray)
    myarray.pop()
    console.log(myarray)
    for(a=1; a<10; a++){
        console.log(a)
    }

    function clickme(){
        let name = document.getElementById('name')
        name = $('#name')
        let email = document.getElementById('email')
        email = $('#email')
        let pass = document.getElementById('password')
        pass = $('#password')
        let mycheckbox = document.getElementById('mycheckbox')
        mycheckbox = $('#mycheckbox')
       // document.getElementsByClass()
       // name.value = "My Name Value"
       //name.val("My Name Value")
        console.log(name.val(), email.val(),
                    pass.val(), mycheckbox.prop('checked'))
        if(name.val() == ""){
            name.addClass('is-invalid');
            $('#invalid-name').html("<b><u>ใส่ name เป็นคำนี้ไม่ได้</u></b>")
            return false;
        }
        else{
            name.removeClass('is-invalid');
        }

        // ตรวจสอบ Email: ต้องมี @ และ .
        let emailPattern =  /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email.val())) {
            email.addClass('is-invalid');
            $('#invalid-email').html("<b><u>อีเมลต้องมี @ และ .</u></b>")
            return false;
        }
        else{
            email.removeClass('is-invalid');
        }

        // ตรวจสอบ Password: ต้องมี ตัวเลข, ตัวพิมพ์เล็ก, ตัวพิมพ์ใหญ่
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/
        if (!passwordPattern.test(pass.val())) {
            pass.addClass('is-invalid');
            $('#invalid-password').html("<b><u>รหัสผ่านต้องมีอย่างน้อย 8 ตัว และต้องมี ตัวเลข, ตัวพิมพ์เล็ก, ตัวพิมพ์ใหญ่</u></b>")
            return false;
        }
        else{
            pass.removeClass('is-invalid');
        }
        // ตรวจสอบ Checkbox: ต้องมีการติ๊กถูก
        if (!mycheckbox.prop('checked')) {
            mycheckbox.addClass('is-invalid');
            $('#invalid-mycheckbox').html("<b><u>ต้องยอมรับเงื่อนไขก่อนสมัคร</u></b>");
            return false;
        } else {
            mycheckbox.removeClass('is-invalid');
            $('#invalid-mycheckbox').html(""); // ลบข้อความแจ้งเตือนถ้าผ่าน
        }


        alert("ลงทะเบียนสำเร็จ!");
        return true;
    }

    // $(document).ready(function()){
    //     //alert("Hello World!")
    // }

    document.querySelector("body > div > div > div.card > div > form > div:nth-child(2)")

</script>
@endsection
