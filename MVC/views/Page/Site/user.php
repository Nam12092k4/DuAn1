<main class="grid wide container user" style="margin:80px auto;">
<div class="breadcrumb-shop"><div class="container">
	<div class="breadcrumb-list  ">
		<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
			
			<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="/collections" target="_self" itemprop="item">
					<span itemprop="name">Thông tin tài khoản</span>
				</a>
				<meta itemprop="position" content="2">
			</li>
			
			
	
			
			
			
		</ol>
	</div>
</div></div>
<style>
    .btn-thaydoi{
        width: 100px;
        height: 40px;
        color:white;
        background-color:#131313;
        border: 0;
        border-radius: 3px;
    }
    .btn-update{
        padding:10px;
        color:white;
        background-color:#131313;
        white-space: nowrap;
        border: 0;
        border-radius: 3px;
    }
    .change-password {
  background-color: white;
  padding: 15px 30px;
  border-radius: 4px;
}
</style>
    <div class="info-user">
        <div class="form-info-user row">
            <form action="" id="changepass_form" method="" class="col l-3 change-password">
                <h2 class="change-password__heading">Đổi mật khẩu</h2>
                <div class="change-password__main">
                    <div class="change-password__item">
                        <p class="change-password__text">Mật khẩu cũ <sup style="color:red;">*</sup></p>
                        <input type="password" name="password" id="" class="change-password__input" placeholder="Nhập mật khẩu cũ">
                    </div>
                    <div class="clear"></div>

                    <div class="change-password__item">
                        <p class="change-password__text">Mật khẩu mới <sup style="color:red;">*</sup></p>
                        <input type="password" name="passwordnew" id="" class="change-password__input" placeholder="Nhập mật khẩu mới">
                        <input type="text" hidden name="user_id" value="<?= $_SESSION['userlogin'][3] ?>">
                        <span class="error"></span>
                    </div>
                </div>
                <button class="btn-thaydoi btn--primary change-password__btn">Thay đổi</button>
            </form>

            <form action="" id="edit_user" method="" class="col l-9 info-user__main">
                <?php $rows = mysqli_fetch_assoc($data['ShowAbout1']) ?>

                <div class="info-user__main-item">
                    <p class="info-user__text">Tên <sup style="color:red;">*</sup></p>
                    <input type="text" name="name" id="" class="info-user__input" value="<?= $rows['name'] ?>" placeholder="Nhập tên của bạn">
                    <input type="text" name="user_id" hidden id="" class="info-user__input" value="<?= $rows['user_id'] ?>">
                </div>

                <div class="info-user__main-item">
                    <p class="info-user__text">Địa chỉ <sup style="color:red;">*</sup></p>
                    <input type="text" name="address" id="" class="info-user__input" value="<?= $rows['address'] ?>" placeholder="Nhập địa chỉ của bạn">
                </div>

                <div class="info-user__main-item contact-info__list">
                    <div class="contact-info__item">
                        <p class="info-user__text">Số điện thoại <sup style="color:red;">*</sup></p>
                        <input type="text" name="phone" id="" class="info-user__input" value="<?= $rows['phone'] ?>" placeholder="Nhập số điện thoại của bạn">
                    </div>
                    <div class="contact-info__item">
                        <p class="info-user__text">Email <small style="color:red;">(Không thay đổi)</small></p>
                        <input type="text" name="" id="" class="info-user__input" value="<?= $rows['email'] ?>" disabled>
                    </div>
                </div>
                <button class="btn-update btn--primary info-user__main--btn">Cập nhật</button>
            </form>
        </div>
    </div>
</main>
<style>
    .error{
        font-size: 1.4rem;
    }
</style>