<main class="con_home_admin">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Goldman&display=swap');
  .col .col-4 .pb-4{
    border-radius: 20px;
  }
  .home_admin{
    display:flex;
    justify-content: center;
    gap:30px;
    padding-top: 30px;
  }
  .home_admin button{
    position: relative;
    width: 150px;
    height: 400px;
   background-color: #77797b;
   border: 0;
   border-radius: 20px;
   box-shadow: 3px 3px 7px 1px rgba(0,0,0,0.3);
  }
  .con_home_admin{
    width: 90%;
    padding: 10px 10px 30px 10px;
    margin: 0 auto;
    border-radius: 10px;
  }
  .text-dark{
    position: absolute;
    bottom: 20px;
    left: 40px;
    padding-top: 15px;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    background-color:white;
    font-size: 30px;
    text-align:center;
  }
  .text-uppercase{
    color:#ffc52f;
    font-family: 'Goldman', sans-serif;
  }
  .mepu{
    width: 100%;
    height: 50px;
    border-radius: 5px;
    background-color: #e9ecef;
    margin: 0 auto;
    text-align: center;
    padding-top: 10px;
  }
</style>
  <section class="mepu">
    
          <h5>Trang chủ</h5>
     
  </section>
  <section>
    <div class="home_admin">
      <button >
        <a href="<?= BASE_URL ?>/Admin/category">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Danh Mục</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countCategory'])) {
                $row = mysqli_fetch_assoc($data['countCategory']);
                echo $row['count(*)'];
              }
              ?>
            </h1>
            <p class="text-danger">
              <i class="fas"></i>
            </p>
          </div>
        </a>
      </button>
      <button>
        <a href="<?= BASE_URL ?>/Admin/brand">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Thương hiệu</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countBrand'])) {
                $row = mysqli_fetch_assoc($data['countBrand']);
                echo $row['count(*)'];
              }
              ?>
               
            </h1>
            <p class="text-danger">
              <i class="fas"></i>
            </p>
          </div>
        </a>
      </button>
      <button>
        <a href="<?= BASE_URL ?>/Admin/product">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Sản phẩm</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countProduct'])) {
                $row = mysqli_fetch_assoc($data['countProduct']);
                echo $row['count(*)'];
              }
              ?>
            </h1>
            <p class="text-success">
              <i class="fas "></i>
            </p>
          </div>
        </a>
      </button>
      <button>
        <a href="<?= BASE_URL ?>/Admin/user">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Tài khoản</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countUser'])) {
                $row = mysqli_fetch_assoc($data['countUser']);
                echo $row['count(*)'];
              }
              ?>
            </h1>
            <p class="text-danger">
              <i class="fas"></i>
            </p>
          </div>
        </a>
      </button>
      <button >
        <a href="<?= BASE_URL ?>/Admin/order">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Đơn hàng</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countOrder'])) {
                $row = mysqli_fetch_assoc($data['countOrder']);
                echo $row['count(*)'];
              }
              ?>
            </h1>
            <p class="text-success">
              <i class="fas "></i>
            </p>
          </div>
        </a>
      </button>
      <button >
        <a href="<?= BASE_URL ?>/Admin/comment">
          <div class="card-body text-center">
            <h6 class="card-title text-uppercase">Bình luận</h6>
            <h1 class="card-text text-dark">
              <?php
              if (isset($data['countComment'])) {
                $row = mysqli_fetch_assoc($data['countComment']);
                echo $row['count(*)'];
              }
              ?>
            </h1>
            <p class="text-danger">
              <i class="fas"></i>
            </p>
          </div>
        </a>
      </button>
     
    </div>
  </section>

</main>


