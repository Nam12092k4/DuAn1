<main class="grid wide container user" style="margin: 0px auto;margin:80px auto;">
<div class="breadcrumb-shop"><div class="container">
    <div class="breadcrumb-list  ">
      <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
          <meta itemprop="position" content="1">		
        </li>
        
        
        
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a >
            <span itemprop="name">Đăng nhập</span>
          </a>
          <meta itemprop="position" content="2">    
        </li>

      </ol>
    </div>
  </div></div>


 
<style>
 @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;1,200&display=swap'); .nhan_container {
  width: 50%;
  padding: 20px;
  border-radius: 5px;
  background-color: white;
  box-shadow: var(--shadow-primary);
  margin: 0 auto;
}
.tab_navigation {
  padding: 0;
  width: 100%;
  text-align: center;
  margin: 0 auto;
  list-style: none;
}
.tab_navigation li {
  display: inline-block;
  padding: 10px 30px;
  min-width: 50px;
  text-align: center; 
  color: #dadcdd;
  font-size: 20px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Mulish', sans-serif;
  transition: all 0.3s ease-in-out;
}
.tab_navigation :nth-last-child(2) {
 
  color: #000;
 
}
.tab_navigation li.active,
.tab_navigation li:hover {
  color: #000;
}
.form-group-login {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-flow: column;
  align-items: center;
  padding: 10px 0;
}
.form-group-login input {
  border: 1px solid #ededed;
  border-radius: 0px;
  width: 100%;
  padding: 14px 10px;
  font-size: 1.6rem;
  background-color: #ededed;
  font-style: italic;
  font-family: 'Mulish', sans-serif;

}
.form-group-login input:focus {
  outline: 0;
  background-color: white;
  box-shadow: 0 0 0 1px #ededed;
}
form#form_login .savepass-login {
  /* margin-left: 2.7rem; */
  margin: 0.5rem 0 1rem 5.5rem;
  font-size: 1.7rem;
}
form#form_login .btn-login {
  display: flex;
  justify-content: center;
}
form#form_login button:hover {
  cursor: pointer;
  opacity: 0.9;
}
#form_login {
  max-width: 600px;
  margin: 0px auto;
}
.btn-login{
  display: flex;
  width: 100%;
  gap:10px;
}
.btn-login button{
  width: 100%;
  border: 0;
  background-color: #474646;
  white-space: nowrap;
  border-radius: 3px;
  padding: 7px auto;
  padding-right:20px ;
  text-align: center;
  margin-left: 0;
  color: white;
  font-weight: 500;
  font-size: 1.8rem;
  font-family: 'Mulish', sans-serif;
}
.quenmk{
  color:#0a9ede;
}
.form-group-regsiter {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-flow: column;
  align-items: center;
  padding: 10px 0;
}
.form-group-regsiter input {
  border: 1px solid #ededed;
  border-radius: 0px;
  width: 100%;
  padding: 14px 10px;
  font-size: 1.6rem;
  background-color: #ededed;
  font-style: italic;
  font-family: 'Mulish', sans-serif;
}

.form-group-regsiter input:focus {
  outline: 0;
  background-color: white;
  box-shadow: 0 0 0 1px #ededed;
}
</style>


<div class="nhan_container">
    <ul class="tab_navigation">
      <li class="mota active" style="background-color:white;">Đăng nhập</li>
      <li style="background-color:white;"> | </li>
      <li class="danhgia" style="background-color:white;"><a>Đăng kí</a></li>
    </ul>
    <div class="tab_container_area" id="mota">
      <div class="tab_container">
      <form action="" method="POST" id="form_login" >
        <div class="form-group-login">
          <input type="text" name="email" id="" class="email-ip" placeholder="Vui lòng nhập email của bạn" />
        </div>
        <div class="form-group-login">
          <input type="password" name="password" id="" placeholder="Vui lòng nhập mật khẩu" />
        </div>
        <div class="btn-login">
        <div>
          <button>Đăng nhập</button>
        </div>
        <div style="padding:10px 10%;">
        <p class="quenmk forgot-show">Quên mật khẩu?</p>
        <p >Bạn chưa có tài khoản? <a class="quenmk" href="<?=BASE_URL?>/home/regsiter" >Đăng ký</a></p>
      </div>
        </div>       
       </form>

      </div>
    </div>
    <div class="tab_container_area" id="danhgia">
      <div class="tab_container">
      <form  action="<?= BASE_URL ?>/Home/regsiter" method="POST" id="form_regsiter">
    <div class="form-group-regsiter">
      <input type="text" name="name" id="" class="email-ip" placeholder="Nhập họ tên" />
    </div>
    <div class="form-group-regsiter">
      <input type="text" name="email" id="" class="email-ip" placeholder="Nhập Email" />
    </div>
    <div class="form-group-regsiter">
      <input type="text" name="phone" id="" class="email-ip" placeholder="Nhập số điện thoại" />
    </div>
    <div class="form-group-regsiter">
      <input type="password" name="password" id="" placeholder="Nhập mật khẩu" />
    </div>
    <div class="btn-login">
        <div>
          <button style="border-radius:1px;background-color:#474646;">Đăng kí</button>
        </div>
        <div style="padding:10px 10%;">
        <p class="quenmk forgot-show">Quên mật khẩu?</p>
       </div>
        </div> 
  </form>
      </div>
    </div>
  </div>
 
</main>


