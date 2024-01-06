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
  #tableSearch{
    background-color: white;
    border-radius: 20px;
    border-top: 0px solid white;
    
  }
  #tableSearch tr{
    background-color: white;
    border-radius: 20px;
    border-top: 10px solid #f3f3f3;
    
  }
  .btn-xoa{
    padding: 6px 15px 1px 15px;
    border: 0;
    border-radius: 5px;
    background-color: red;
  }
</style>
<section class="mepu">
    
    <h5>Quản lí thương hiệu</h5>

</section>
   
    <section class="Product">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="tableSearch">
                <?php
                while ($row = mysqli_fetch_array($data['showOrderDetails'])) {
                ?>
                    <tr>
                        <td class="capitalize"><img class="thumbnailOD" src="<?= BASE_URL ?>/<?= $row['thumbnail'] ?>" alt=""></td>
                        <td><?= $row['product_name'] ?></td>
                        <td><?= $row['size'] ?></td>
                        <td><?= $row['num'] ?></td>
                        <td class="address_user_truncate"><?= $row['price'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <?php
    $item = mysqli_fetch_assoc($data['showOrderDetailsID']);
    ?>
    <form action="<?= BASE_URL ?>/Admin/updateOrder/<?= $item['order_id'] ?>" method="POST" class="modal-footer updateOrder container mb-5 pb-9">
        <select class="form-status form-select form-select-lg mb-3 mt-3" name="status" aria-label=".form-select-lg example">
            <?php
            $result = mysqli_fetch_assoc($data['showStatus']);
            if ($result['status'] == 'Đang tiến hành') {
            ?>
                <option selected value="Đang tiến hành">Đang xử lí</option>
                <option value="Đang giao">Đang giao</option>
                <option value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Đã hủy">Đã hủy</option>
            <?php
            }
            if ($result['status'] == 'Đã nhận hàng') {
            ?>
                <option value="Đang tiến hành">Đang tiến hành</option>
                <option value="Đang giao">Đang giao</option>
                <option selected value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Đã hủy">Đã hủy</option>
            <?php
            }
            if ($result['status'] == 'Đã hủy') {
            ?>
                <option value="Đang tiến hành">Đang tiến hành</option>
                <option value="Đang giao">Đang giao</option>
                <option selected value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Đã hủy">Đã hủy</option>
            <?php
            }
            if ($result['status'] == 'Đang giao') {
            ?>
                <option value="Đang tiến hành">Đang tiến hành</option>
                <option selected value="Đang giao">Đang giao</option>
                <option value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Đã hủy">Đã hủy</option>
            <?php
            }
            ?>
        </select>
        <div>
            <?php
            $previous = "javascript:history.go(-1)";
            if (isset($_SERVER['HTTP_REFERER'])) {
                $previous = $_SERVER['HTTP_REFERER'];
            }
            ?>
            <a href="<?= $previous ?>" class="btn btn-warning">Quay lại</a>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
</main>