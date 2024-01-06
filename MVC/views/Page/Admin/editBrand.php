<main class="pt-3 container-fluid">
  <section class="name-pages">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <h5>Thêm/Sửa Thương hiệu</h5>
        </li>
      </ol>
    </nav>
  </section>
  <section class="category container pb-5">
    <form method="POST" action="">
      <?php
      $row = mysqli_fetch_assoc($data['ShowEdit']);
      if (mysqli_num_rows($data['ShowEdit']) < 1) {
        $row['name'] = "";
        echo '
        <script>
            alert("Thương hiệu không tồn tại!")
            window.location.assign("../brand");
        </script>
        ';
      }
      ?>
      <div class="form-group">
        <label for="formGroupExampleInput">Tên thương hiệu</label>
        <input type="text" name="name" required class="form-control" id="formGroupExampleInput" placeholder="Tên thương hiệu..." value="<?= $row['name'] ?>">
      </div>
      <button class="btn btn-success">Lưu</button>
      <?php
      $previous = "javascript:history.go(-1)";
      if (isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
      }
      ?>
      <a href="<?= $previous ?>" class="btn btn-warning">Back</a>
    </form>
  </section>
</main>