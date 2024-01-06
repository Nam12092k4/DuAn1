<div id="forgot">
    <i class="close-forgot"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m7 7l10 10M7 17L17 7"/></svg></i>
    <h3 class="forgot-title">Quên mật khẩu</h3>
    <p>Bạn đã có tài khoản? <span class="login-show">Đăng nhập</span></p>
    <form action="" id="form_forgot">
        <div class="form-group-forgot">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="email-ip" placeholder=" " />
        </div>
        <div class="btn-forgot">
            <button>Lấy mật khẩu</button>
        </div>
    </form>
</div>
<style>
    .login_alone p.forgot-shows {
  font-size: 10px;
  text-decoration: none;
  display: block;
  margin: 10px 0;
  color: blue;
  cursor: pointer;
}
.login-show {
  cursor: pointer;
  color: #317bf0;
}
.forgot-pass span {
  background-color: white;
  position: relative;
  padding: 0 4px;
}
.forgot-pass span:hover {
  opacity: 0.9;
}
.forgot-pass {
  margin-top: 1rem;
  color: #317bf0;
  cursor: pointer;
  font-size: 17px;
  text-align: center;
  position: relative;
}
.forgot-pass::before {
  content: "";
  width: 80%;
  position: absolute;
  border-radius: 4px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 1px;
  background-color: #999;
}
#regsiter-dev form.regsiter_alone .forgot-passs {
  text-align: left;
  font-size: 1.7rem;
  color: blue;
  margin-top: 1rem;
  font-weight: 600;
  cursor: pointer;
}
#forgot {
  display: none;
  background-color: white;
  font-family: Muli, sans-serif;
  z-index: 999999;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: auto;
  border-radius: 10px;
  box-shadow: 10px 10px 10px 100vh rgba(0,0,0,0.7);
  padding:40px 30px;
  line-height: 1.5;
}
#forgot .close-forgot {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 23px;
  color: #191146;
  cursor: pointer;
  transition: all 0.1s;
}
#forgot .close-forgot:hover {
  transform: rotate(360deg);
}
#forgot h3.forgot-title {
    font-family: 'Kanit', sans-serif;
  font-size: 25px;
  text-align: center;
  margin: 0px;
  color:#999;
  font-weight:500;
}
#forgot p {
  font-size: 20px;
  text-align: center;
}

.form-group-forgot .error {
  color: red;
}
.form-group-forgot{
    width:90%;
}
.form-group-forgot input {
  border-radius: 2px;
  border: 1px solid #e3e3e5;
  width: 100%;
  padding: 10px;
  font-size: 17px;
}

.form-group-forgot input:focus {
  border: o;
  outline: 0;
  box-shadow: 0 0 0 2px #e3e3e5;
}
.form-group-forgot label {
  user-select: none;
  pointer-events: none;
  color: #e3e3e5;
  transition: all 0.4s;
  font-size: 1.7rem;
  /* position: absolute; */
  padding: 0 5px;
  /* top: 34%;
  left: 11%; */
}
form#form_forgot .savepass-forgot {
  /* margin-left: 2.7rem; */
  margin: 0.5rem 0 1rem 5.5rem;
  font-size: 1.7rem;
}
form#form_forgot .btn-forgot {
  display: flex;
  margin-top: 10px;
  justify-content: center;
}
form#form_forgot button {
  border: 0;
  width: 90%;
  background-color: #5f5f63;
  border-radius: 20px;
  padding:10px;
  color: white;
  font-size: 18px;
  font-family: Muli, sans-serif;
}
form#form_forgot button:hover {
  cursor: pointer;
  opacity: 0.9;
}
</style>