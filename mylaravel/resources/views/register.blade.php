@extends('layouts.default')

@section('content')
<div class="register-page" style="background-color:rgb(43, 15, 134); padding: 20px; border-radius: 10px;">
  <div class="register-box" style="max-width: 500px; margin: auto;">
    <div class="register-logo">
      <a href="../index2.html" style="color:rgb(188, 242, 10);"><b>Admin</b>LTE</a>
    </div>
    <div class="card" style="border: none; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">
      <div class="card-body register-card-body" style="background-color:rgb(211, 238, 106); border-radius: 10px;">
        <p class="register-box-msg" style="color: #8B4513; font-weight: bold;">สมัครสมาชิกใหม่</p>
        <form action="{{url('/register')}}" onsubmit="return allcheck(event)" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อ - นามสกุล" style="width: 100%;" oninput="checkname()"/>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกชื่อ - นามสกุล</div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="อีเมล" style="width: 100%;" oninput="checkemail()"/>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="valid-feedback">อีเมลถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกอีเมลให้ถูกต้อง</div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="รหัสผ่าน" style="width: 100%;" oninput="checkpassword()" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="valid-feedback">รหัสผ่านถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกรหัสผ่านให้ถูกต้อง</div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  ยอมรับ <a href="#">เงื่อนไขการใช้งาน</a>
                </label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary w-100">สมัครสมาชิก</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
function checkname() {
    let name = $('#name').val().trim(); 
    if (name !== "" && name.length >= 3) {
        $('#name').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#name').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function checkemail() {
    let email = $('#email').val(); 
    let emailcorrect = /^[a-zA-Z0-9+-_%.]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,}$/;
    if (emailcorrect.test(email)) {
        $('#email').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#email').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function checkpassword() {
    let passwordcorrect = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])[a-zA-Z0-9+-_%.]{8,}$/;
    let password = $('#password').val(); 
    if (passwordcorrect.test(password)) {
        $('#password').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#password').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
}
function allcheck(event){
    event.preventDefault();
    let checkbox = document.getElementById("flexCheckDefault").checked;
    let confirm = checkname() && checkemail() && checkpassword() && checkbox;
    let title = confirm ? "สำเร็จ" : "เกิดข้อผิดพลาด";
    let text = !checkname() ? "กรุณากรอกชื่อ - นามสกุล" :
               !checkemail() ? "กรุณากรอกอีเมลให้ถูกต้อง" :
               !checkpassword() ? "กรุณากรอกรหัสผ่านให้ถูกต้อง" :
               "";
    let icon = confirm ? "success" : "error";
    swal.fire({ title: title, text: text, icon: icon });
    if (confirm) {
        event.target.submit();
    }
}
</script>
@endsection