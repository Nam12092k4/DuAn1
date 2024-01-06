
<main class="container" style="margin-top:80px;">
<div class="breadcrumb-shop"><div class="container">
    <div class="breadcrumb-list  ">
      <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
          <meta itemprop="position" content="1">		
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="https://eshop.wegocoffee.com/collections/cong-cu-pha-che-thu-cong" target="_self" itemprop="item">
            <span itemprop="name">Thanh toán</span>
          </a>
          <meta itemprop="position" content="2">    
        </li>
        
        
      </ol>
    </div>
  </div></div>
    <section class="checkout">
    <form action="<?=BASE_URL?>/home/checkoutAct"  method="post"  >
        <section class="checkout-main">
            <div  class="form-checkout"  id="checkoutForm">
            
                <?php
                $result = mysqli_fetch_assoc($data['showUserCheckout']);
                ?>
                <label for="">Thông tin khách hàng <span class="red">*</span></label>
                <input type="text" required name="name" value="<?= $result['name'] ?>" placeholder="Họ và tên...">
                <input type="text" required name="phone" value="<?= $result['phone'] ?>" placeholder="Số điện thoại...">
                <textarea required name="address" id="address" cols="30" rows="4" placeholder="Địa chỉ nhận hàng..."><?= $result['address'] ?></textarea>
                <textarea name="note" id="" cols="30" rows="2" placeholder="Ghi chú cho đơn hàng (Không bắt buộc)"></textarea>
                <?php
                if (isset($_SESSION['userlogin'])) {
                ?>
                    <input hidden type="hidden" name="user_id" value="<?= $_SESSION['userlogin'][3] ?>"> <br>
                <?php
                }
                ?>
            </div>

            <div class="checkout-cart">		
              		
             <div class="step-sections " step="2">
                <h3>Phương thức thanh toán</h3>
             <div class="section">   
             <div class="section-content">
             <div class="content-box">       
                <div class="radio-wrapper content-box-row">
                <label class="two-page" for="payment_method_id_1003306501">
                      <div class="radio-input payment-method-checkbox">
                        <input  value="COD" name="banking" id="payLater" class="input-radio"  type="radio"  >
                        </div>                     
                       <div class="radio-content-input">
                     <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=6">
                    <div class="content-wrapper">
                    <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                 <span class="quick-tagline hidden"></span>             
                 </div>
                </div>
                </label>
        </div>
               
                <div class="radio-wrapper content-box-row">
                    <label class="two-page" for="payment_method_id_1003306503">
                    <div class="radio-input payment-method-checkbox">
                    <input value="banking" id="banking" name="banking" class="input-radio"  type="radio">
                    </div>
                     <div class="radio-content-input">
                    <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=6">
                    <div class="content-wrapper">
                      <span class="radio-label-primary">Chuyển khoản qua ngân hàng</span>
                    <span class="quick-tagline hidden"></span>                                                                             
                    </div>
                    </div>
                    </label>
                    </div>
                   
                <div class="content-banking content-banking-none">
                <div class="blank-slate">																		
                    Quý khách vui lòng chuyển khoản tới tài khoản theo cú pháp: Tên + SĐT + Sản Phẩm Đã Mua  
                    Tên STK: ĐẶNG SỸ HOÀI NAM
                    STK: 888688674 
                    Ngân Hàng: MBbank 
                    <div>
                        
                    <img src="http://localhost/DuAn1/MVC/public/images/maqr.jpg" style="width:30%;margin:0 auto;border-radius:10px;">
                    </div>
                      Nhân viên OlaStore sẽ liên hệ với bạn ngay khi nhận được thông tin chuyển khoản. 												
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <h3>Đơn hàng</h3>
                <?php
                $tongTien = 0;
                if (isset($_SESSION['giohang'])) {
                    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                        $total = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                ?>
                        <div class="product-item">
                            <img class="thumbnail-checkoit-pr" src="<?= BASE_URL ?>/<?= $_SESSION['giohang'][$i][4] ?>" alt="">
                            <div class="text-pd">
                                <p><?= $_SESSION['giohang'][$i][5] ?></p>
                                <p>Loại sản phẩm: <?= $_SESSION['giohang'][$i][0] ?> (<?= $_SESSION['giohang'][$i][2] ?>)</p>
                                <p class="b-600"><?= number_format($_SESSION['giohang'][$i][3], 0, ",", ".") ?> ₫</p>
                            </div>
                        </div>
                <?php
                        $tongTien = $total + $tongTien;
                    }
                }
                ?>
                <div class="price-checkout">
                    <div class="d-between price-checkout-pr">
                        <p>Tạm tính</p>
                        <p><?= number_format($tongTien, 0, ",", ".") ?> ₫</p>
                    </div>
                    <div class="d-between price-checkout-ship">
                        <p>Phí vận chuyển</p>
                        <p>Miễn phí</p>
                    </div>
                </div>
                <div class="d-between price-checkout-total">
                    <p>Tổng cộng</p>
                    <p id="total-check"><?= number_format($tongTien, 0, ",", ".") ?> ₫</p>
                </div>
                <!-- <a href="" class="btn-checkout">Tiến hành đặt hàng</a> -->
                <button name="submit" id="checkoutSubmit" class="btn-checkout">Hoàn tất đơn hàng</button>
            </div>
        </section>
        </form>
    </section>
   
</main>	
					
				