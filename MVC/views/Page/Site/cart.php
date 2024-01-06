
<main class="wrapperMain_content" style="margin-top:80px;">	

     
<div class="breadcrumb-shop"><div class="container">
    <div class="breadcrumb-list  ">
      <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="http://localhost/DuAn1/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
          <meta itemprop="position" content="1">		
        </li>
        
        
        
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a href="https://eshop.wegocoffee.com/collections/cong-cu-pha-che-thu-cong" target="_self" itemprop="item">
            <span itemprop="name">Giỏ Hàng</span>
          </a>
          <meta itemprop="position" content="2">    
        </li>
        
        
      </ol>
    </div>
  </div></div>

<div id="layout-cart">
	
	<div class="wrapper-mainCart">
		<div class="content-bodyCart">
			<div class="container">
				<div class="row">			
					<div class="col-lg-8 col-md-12 col-12 contentCart-detail">
						<div class="mainCart-detail">
							<h1 class="heading-cart">Giỏ hàng của bạn</h1>
							
							<div class="list-pageform-cart">
								<form action="/cart" method="post" id="cartformpage">
									<div class="cart-row">
										<p class="title-number-cart">
                                    <?php    if (isset($_SESSION['giohang'])) {
            $numCart = 0;
            for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
              $numCart += $_SESSION['giohang'][$i][2];
            } 
            echo 'Bạn đang có <strong class="count-cart">' . $numCart . ' sản phẩm</strong> trong giỏ hàng';
          } else {
            echo 'Bạn đang có <strong class="count-cart">0 sản phẩm</strong> trong giỏ hàng';
          }
          ?>
											
										</p>
										<div class="table-cart">
                                        <?php
                                            $tongTien = 0;
                                            if (isset($_SESSION['giohang'])) {
                                                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                                                    $total = intval($_SESSION['giohang'][$i][2]) * intval($_SESSION['giohang'][$i][3]);
                                            ?>
											<div class="media-line-item line-item" data-variant-id="1091315605" data-product-id="1041845542">
                                
                                                <div class="media-left">
													<div class="item-img">
														<a>
                                                        <img src="<?= BASE_URL ?>/<?= $_SESSION['giohang'][$i][4] ?>" alt="">
														</a>
													</div>
                                                    <div class="item-remove">
                                                    <a href="<?=BASE_URL?>/Cart/deldCart/<?=$i?>">Xóa</a>
													</div>
												</div>
												<div class="media-right">
													<div class="item-info">
														<h3 class="item--title"><a href="<?= BASE_URL ?>/home/product/<?= $_SESSION['giohang'][$i][1] ?>"><?= $_SESSION['giohang'][$i][5] ?></a></h3>
														
													</div>
													<div class="item-price" hidden>
														<p>
															<span><?= number_format(floatval($tongTien), 0, ",", ".") ?> ₫</span>
														
														</p>
													</div>
												</div>
												<div class="media-total">
													<div class="item-total-price">
														<div class="price">
															<span class="line-item-total"><?= number_format($total, 0, ",", ".") ?> ₫</span>
														</div>
													</div>
													<div class="item-qty">
														<div class="qty quantity-partent qty-click clearfix">
															<button type="button" class="qtyminus qty-btn">
																<svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect></svg>
															</button>
															<input type="text" size="4" name="updates[]" min="1" oriprice="26010000" line="1" productid="1041845542" variantid="1091315605" id="updates_1091315605" data-price="23409000" value="1" readonly="" class="tc line-item-qty item-quantity">
															<button type="button" class="qtyplus qty-btn">
																<svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect></svg>
															</button>
														</div>
													</div>
												</div>
											</div>
                                            <?php
                                             $tongTien = $total + $tongTien;
                                                }
                                            }
                                            ?>
											
										</div>
									</div>
									
									<div class="cart-row">
										<div class="order-invoice-block">	
											


											
										</div>
									</div>
								</form>
							</div>
									
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-12 sidebarCart-sticky">
						<div class="wrap-order-summary">			
							<div class="order-summary-block">
								
								<div class="summary-total">
									<p>Tổng tiền: <span><?= number_format($tongTien, 0, ",", ".") ?> ₫</span></p>
								</div>
								<div class="summary-action">					
                                <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>

						
								</div>
								<div class="summary-button">	
									<a id="btnCart-checkout" class="checkout-btn btnred "  href="<?= BASE_URL ?>/home/checkout">THANH TOÁN </a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

		</main>