<?php
class CategoryModel extends DB
{
    public function ListAll()
    {
        $sql = "SELECT * FROM category";
        return mysqli_query($this->con, $sql);
    }

    public function countCategory()
    {
        $sql = "SELECT count(*) FROM category";
        return mysqli_query($this->con, $sql);
    }
    public function countBrand()
    {
        $sql = "SELECT count(*) FROM brand";
        return mysqli_query($this->con, $sql);
    }
    public function ListItem($id)
    {
        $sql = "SELECT * FROM category where category_id=$id";
        return mysqli_query($this->con, $sql);
    }
    public function ListBrand($id)
    {
        $sql = "SELECT * FROM brand where brand_id=$id";
        return mysqli_query($this->con, $sql);
    }
    public function showBrand()
    {
        $sql = "SELECT * FROM brand";
        return mysqli_query($this->con, $sql);
    }
    public function addCategory($name)
    {
        $sql = "INSERT INTO category(category_name) VALUES ('" . $name . "')";
        $result = mysqli_query($this->con, $sql);
        if (!$result) {
            echo '
                        <script>
                            alert("Đã xảy ra lỗi, vui lòng thử lại")
                        </script>
                        ';
            exit;
        } else {
            echo '
                <script>
                    alert("Thêm danh mục thành công")
                    window.location.assign("./Category");
                </script>
                ';
            exit;
        }
    }

    public function addBrand($name, $category_id)
    {
        $sql = "INSERT INTO brand (name, category_id) VALUES ('" . $name . "','" . $category_id . "') ";
        $result = mysqli_query($this->con, $sql);
        
        if (!$result) {
            echo '<script>';
            echo 'alert("Đã xảy ra lỗi: ' . mysqli_error($this->con) . '");';
            echo 'window.history.back();';  // Quay lại trang trước đó
            echo '</script>';
            exit;
        } else {
            echo '
                <script>
                    alert("Thêm thương hiệu thành công")
                    window.location.assign("./brand");
                </script>
                ';
            exit;
        }
    }
    

    public function checkidbrand($id)
    {
        $check = mysqli_query($this->con, "SELECT * FROM brand where brand_id = '$id'");
        if (mysqli_num_rows($check) < 1) {
            echo '
                <script>
                    alert("Thương hiệu không tồn tại")
                    window.location.assign("../brand");
                </script>
            ';
        }
    }
    public function checkid($id)
    {
        $check = mysqli_query($this->con, "SELECT * FROM category where category_id = '$id'");
        if (mysqli_num_rows($check) < 1) {
            echo '
                <script>
                    alert("Danh mục không tồn tại")
                    window.location.assign("../Category");
                </script>
            ';
        }
    }
    public function editcategory($id, $name)
    {
        $sql = "UPDATE category SET category_name = '$name' WHERE category_id = '$id'";
        $result = mysqli_query($this->con, $sql);
        if (!$result) {
            echo '
                        <script>
                            alert("Đã xảy ra lỗi, vui lòng thử lại")
                        </script>
                        ';
            exit;
        } else {
            echo '
                <script>
                    alert("Sửa danh mục thành công")
                    window.location.assign("../Category");
                </script>
                ';
            exit;
        }
    }

    public function editBrand($id, $name)
    {
        $sql = "UPDATE brand SET name = '$name' WHERE brand_id = '$id'";
        $result = mysqli_query($this->con, $sql);
        if (!$result) {
            echo '
                        <script>
                            alert("Đã xảy ra lỗi, vui lòng thử lại")
                        </script>
                        ';
            exit;
        } else {
            echo '
                <script>
                    alert("Sửa thương hiệu thành công")
                    window.location.assign("../brand");
                </script>
                ';
            exit;
        }
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM category where category_id=$id";
        return mysqli_query($this->con, $sql);
    }
    public function deleteBrand($id)
    {
        $sql = "DELETE FROM brand where brand_id=$id";
        return mysqli_query($this->con, $sql);
    }
}
