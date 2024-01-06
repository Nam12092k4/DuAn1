<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Olastore</title>
    <!--Start of Fchat.vn--><script type="text/javascript" src="https://cdn.fchat.vn/assets/embed/webchat.js?id=657825591b220f49477fcd64" async="async"></script><!--End of Fchat.vn-->
    <link rel="shortcut icon" href="<?= BASE_URL ?>/MVC/public/images/icon_logo.png" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/grid.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/base.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/style.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/style1.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/responsive.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/themify-icons/themify-icons.css" />   
<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/boostrap.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/swal.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/jquery.jgrowl.min.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/hstatic.css" />

    <link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/boostrap.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/swal.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/jquery.jgrowl.min.css" />
		<link rel="stylesheet" href="<?= BASE_URL ?>/MVC/public/css/hstatic.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>
</head>

<body style="background-color:#f5f5f5;">
    
    <div class="app">
        <span class="scroll-top show-scroll" id="toTop">
            <i class="scroll-top__icon fas fa-chevron-up"></i>
        </span>
        <?php require_once "./mvc/views/blocks/header.php"; ?>
        <?php require_once "./mvc/views/Page/Site/" . $data["Page"] . ".php" ?>
        <?php require_once "./mvc/views/blocks/footer.php"; ?>
    </div>
    <?php require_once "./mvc/views/Page/site/regsiter.php"; ?>
    <?php require_once "./mvc/views/Page/site/forgot.php"; ?>
    <!-- ============================= Javascript ===================================== -->
    <script>
        

function loginOnclick() {
  var x = document.querySelector(".login-children__list");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function loginOnblur() {
  var x = document.querySelector(".login-children__list");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function deleteComment(id) {
  var option = confirm("Bạn có chắc chắn muốn xoá sản phẩm này không?");
  if (!option) {
    return;
  }
  $.post(
    "../deleteComment",
    {
      id: id,
      action: "delete",
    },
    function (data) {
      location.reload();
    }
  );
}

$(document).ready(function () {
  // PHÂN TRANG
  phantrang();
  showNumAjax();

  var category = [];
  $(".category").click(function () {
    console.log(category);
    phantrang();
    showNumAjax();
  });

  var locSP = "DESC";
  $(".locSP").click(function () {
    var locSP = $(".locSP").val();
    phantrang();
    showNumAjax();
  });

  function phantrang(page) {
    var category = getClass("category");
    var locSP = $(".locSP").val();

    $.ajax({
      url: "http://localhost/DuAn1/home/phantrang",
      method: "POST",
      data: {
        page: page,
        category: category,
        locSP: locSP,
      },
      success: function (data) {
        $("#pagination_data").html(data);
      },
    });
  }

  function showNumAjax(page) {
    var category = getClass("category");
    $.ajax({
      url: "http://localhost/DuAn1/home/showNumAjax",
      method: "POST",
      data: {
        page: page,
        category: category,
      },
      success: function (data) {
        $("#showNum").html(data);
      },
    });
  }

  $(document).on("click", ".pagination_link", function () {
    var page = $(this).attr("id");
    phantrang(page);
  });

  function getClass(className) {
    var filter = [];
    $("." + className + ":checked").each(function () {
      filter.push($(this).val());
    });
    return filter;
  }

  // Thanh toán
  $("#checkoutSubmit").click(function () {
    $("#checkoutForm").submit();
  });

  var address = $("#address").length;
  // var checkoutSubmit= $("#checkoutSubmit");
  if (address == 0) {
    $("button#checkoutSubmit").prop("disabled", true);
  }

  // checkoutForm
  $("#checkoutForm").validate({
    rules: {
      name: {
        required: true,
      },
      phone: {
        required: true,
        number: true,
        minlength: 10,
      },
      address: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      name: {
        required: "Bạn chưa nhập tên",
      },
      phone: {
        required: "Bạn chưa nhập số điện thoại",
        required: "Vua lòng nhập số",
        required: "Số điện thoại phải trên 10 số",
      },
      address: {
        required: "Bạn chưa nhập nội dung",
        minlength: "Ký tự tối thiểu là 10",
      },
    },
  });

  // Bình luận
  $("#formComment").validate({
    rules: {
      content: {
        required: true,
        minlength: 2,
      },
    },
    messages: {
      content: {
        required: "Bạn chưa nhập nội dung",
        minlength: "Ký tự tối thiểu là 2",
      },
    },
    submitHandler: function (form) {
      $.ajax({
        type: "POST",
        url: "../commentAction",
        id: "id",
        data: $(form).serializeArray(),
        success: function (response) {
          response = JSON.parse(response);
          if (response.status == 0) {
            swal("Thất bại!", response.message, "error");
          } else {
            document.getElementById("formComment").reset();
            // swal("Thành công!", response.message, "success");
            loadComment();
          }
        },
      });
    },
  });

  loadComment();
  function loadComment() {
    $.ajax({
      url: "../loadComment",
      type: "post",
      data: {
        orderby: "DESC",
      },
    }).done(function (data) {
      $("#loadComment").html(data);
    });
  }


 
  function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
  }

  var data = $(this).attr("value");
  var nho = $("p.Nhỏ").attr("name");
  var vua = $("p.Vừa").attr("name");
  var lon = $("p.Lớn").attr("name");

  if (nho == 0) {
    console.log("undefined");
    $("#sizeNho").prop("disabled", true);
  }
  if (vua == 0) {
    console.log("undefined");
    $("#sizeVua").prop("disabled", true);
  }
  if (lon == 0) {
    console.log("undefined");
    $("#sizeLon").prop("disabled", true);
  }

  // CART NUMBER
  $("input[type=radio]").change(function () {
    var data = $(this).attr("value");
    var nho = $("p.Nhỏ").attr("name");
    var vua = $("p.Vừa").attr("name");
    var lon = $("p.Lớn").attr("name");

    if (data == "Nhỏ") {
      nho2 = formatNumber(nho);
      $("#priceSize").html(nho2 + " VNĐ");
      $("#pricePost").val(nho2 + " VNĐ");
      $("#pricePost2").val(nho);
    }
    if (data == "Vừa") {
      vua2 = formatNumber(vua);
      $("#priceSize").html(vua2 + " VNĐ");
      $("#pricePost").val(vua2 + " VNĐ");
      $("#pricePost2").val(vua);
    }
    if (data == "Lớn") {
      lon2 = formatNumber(lon);
      $("#priceSize").html(lon2 + " VNĐ");
      $("#pricePost").val(lon2 + " VNĐ");
      $("#pricePost2").val(lon);
    }
  });

  var inputVal = $("input#input").val();
  $("span#plus").click(function () {
    inputVal++;
    $("input[name='num']").val(inputVal);
    return false;
  });
  $("span#minus").click(function () {
    inputVal--;
    if ((inputVal = 1)) {
      $("span#minus").prop("disabled", true);
    }
    $("input[name='num']").val(inputVal);
    console.log(inputVal);
    return false;
  });

  //   On TOP
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });
  $("#toTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  //  Thanh toán
  $("input[type=radio][name=banking]").change(function () {
    if (this.value == "payLater") {
      $(".content-banking").addClass("content-banking-none");
    } else if (this.value == "banking") {
      $(".content-banking").removeClass("content-banking-none");
    }
  });

  // Đăng nhập

  $("#login-tab").click(function () {
    $("#login").css("display", "block");
    $(".app").css("opacity", "0.8");
    $("html, body").animate({ scrollTop: 0 }, 100);
    return false;
  });
  $(".close-login").click(function () {
    $("#login").css("display", "none");
    $(".app").css("opacity", "1");
  });

  // Đăng ký
  $(".regsiter-show").click(function () {
    $("#login").css("display", "none");
    $("#regsiter").css("display", "block");
  });
  $(".login-show").click(function () {
    $("#regsiter").css("display", "none");
    $("#login").css("display", "block");
  });
  $(".close-regsiter").click(function () {
    $("#regsiter").css("display", "none");
    $(".app").css("opacity", "1");
  });

  // Quên mật khẩu
  $(".forgot-show").click(function () {
    $("#login").css("display", "none");
    $("#regsiter").css("display", "none");
    $("#forgot").css("display", "block");
    $(".app").css("opacity", "0.8");
    $("html, body").animate({ scrollTop: 0 }, 100);
  });
  $(".login-show").click(function () {
    $("#regsiter").css("display", "none");
    $("#forgot").css("display", "none");
    $("#login").css("display", "block");
  });
  $(".close-forgot").click(function () {
    $("#forgot").css("display", "none");
    $(".app").css("opacity", "1");
    $("html, body").css({
      overflow: "auto",
      height: "auto",
    });
  });
});

// BÌNH LUẬN > MÔ TẢ
$(".mota").click(function () {
  $("#mota").css("display", "block");
  $("#danhgia").css("display", "none");
  $(".mota").addClass("active");
  $(".danhgia").removeClass("active");
  return false;
});
$(".danhgia").click(function () {
  $("#mota").css("display", "none");
  $("#danhgia").css("display", "block");
  $(".mota").removeClass("active");
  $(".danhgia").addClass("active");
  return false;
});

// ĐỔI MẬT KHẨU
$("#changepass_form").validate({
  rules: {
    password: {
      required: true,
      minlength: 6,
    },
    passwordnew: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    password: {
      required: "Bạn phải nhập mật khẩu",
      minlength: "Mật khẩu tối thiểu là 6 ký tự",
    },
    passwordnew: {
      required: "Bạn phải nhập mật khẩu",
      minlength: "Mật khẩu tối thiểu là 6 ký tự",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/changepass",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          swal("Thất bại!", response.message, "error");
        } else {
          swal("Thành công!", response.message, "success");
          setTimeout("location.href = './user';", 1000);
        }
      },
    });
  },
});
$("#add_address").validate({
  rules: {
    address: {
      required: true,
    },
  },
  messages: {
    address: {
      required: "Bạn phải nhập địa chỉ",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/adr",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          swal("Thất bại!", response.message, "error");
        } else {
          swal("Thành công!", response.message, "success");
          setTimeout("location.href = './home';", 1000);
        }
      },
    });
  },
});
// SỬA THÔNG TIN NGƯỜI DÙNG
$("#edit_user").validate({
  rules: {
    name: {
      required: true,
    },
    address: {
      required: true,
    },
    phone: {
      required: true,
      number: true,
      minlength: 10,
    },
  },
  messages: {
    name: {
      required: "Bạn phải nhập họ và tên",
    },
    address: {
      required: "Bạn phải nhập địa chỉ",
    },
    phone: {
      required: "Bạn phải nhập số điện thoại",
      number: "Số điện thoại bắt buộc là số",
      minlength: "Số điện thoại không được dưới 10 ký tự",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/edituser",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          swal("Thất bại!", response.message, "error");
        } else {
          swal("Thành công!", response.message, "success");
          setTimeout("location.href = './user';", 1000);
        }
      },
    });
  },
});

// REGSITER VALIDATE
$("#form_regsiter").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },
    phone: {
      required: true,
      number: true,
      minlength: 10,
    },
    password: {
      required: true,
      minlength: 6,
    },
    repassword: {
      equalTo: "#password",
    },
    name: {
      required: true,
    },
  },
  messages: {
    email: {
      required: "Bạn chưa nhập email",
      email: "Email chưa đúng định dạng",
      remote: "Email đã tồn tại trong hệ thống. Mời bạn chọn email khác",
    },
    phone: {
      required: "Bạn phải nhập số điện thoại",
      number: "Số điện thoại bắt buộc là số",
      minlength: "Số điện thoại không được dưới 10 ký tự",
    },
    password: {
      required: "Bạn phải nhập mật khẩu",
      minlength: "Mật khẩu tối thiểu là 6 ký tự",
    },
    repassword: {
      equalTo: "Mật khẩu không khớp",
    },
    name: {
      required: "Bạn phải nhập họ và tên",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/RegisterAction",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          swal("Thất bại!", response.message, "error");
          $("#regsiter").css("display", "none");
          $("#forgot").css("display", "none");
          $(".app").css("opacity", "1");
        } else {
          swal("Thành công!", response.message, "success");
          setTimeout("location.href = './';", 1000);
          $("#regsiter").css("display", "none");
          $("#forgot").css("display", "none");
          $(".app").css("opacity", "1");
        }
      },
    });
  },
});

// QUÊN MK
$("#form_forgot").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    email: {
      required: "Bạn chưa nhập email",
      email: "Email chưa đúng định dạng",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/forgotAction",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          //Đăng nhập lỗi
          $("#login").css("display", "none");
          $("#forgot").css("display", "none");
          $("#regsiter").css("display", "none");
          $(".app").css("opacity", "1");
          swal("Thất bại!", response.message, "error");
        } else {
          //Đăng nhập thành công
          $("#login").css("display", "none");
          $("#forgot").css("display", "none");
          $("#regsiter").css("display", "none");
          $(".app").css("opacity", "1");
          swal("Thành công!", response.message, "success");
        }
      },
    });
  },
});

// LOGIN VALIDATE
$("#form_login").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },
    password: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    email: {
      required: "Bạn chưa nhập email",
      email: "Email chưa đúng định dạng",
    },
    password: {
      required: "Vui lòng nhập mật khẩu",
      minlength: "Password tối thiểu là 6 ký tự",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "http://localhost/DuAn1/Home/loginAction",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          //Đăng nhập lỗi
          swal("Thất bại!", response.message, "error");
          $("#login").css("display", "none");
          $(".app").css("opacity", "1");
        } else {
          //Đăng nhập thành công
          swal("Thành công!", response.message, "success");
          // location.reload();
          setTimeout("location.href = 'http://localhost/DuAn1/';", 1000);
          $("#login").css("display", "none");
          $(".app").css("opacity", "1");
        }
      },
    });
  },
});





    </script>
    <script src="<?= BASE_URL ?>/MVC/public/js/sl.js"></script>
    <script src="<?= BASE_URL ?>/MVC/public/js/jquery.validate.min.js"></script>
    <script src="<?= BASE_URL ?>/MVC/public/js/jquery-ui.min.js"></script>
    <script src="<?= BASE_URL ?>/MVC/public/js/slider.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            let headerMenu = document.querySelector('#menu-area');
            if (window.pageYOffset > 0) {
                headerMenu.classList.add("cus-nav");
            } else {
                headerMenu.classList.remove("cus-nav");
            }
        })
    </script>
       <!-- SCRIPT PRODUCT -->
<script src="//theme.hstatic.net/200000565469/1000915384/14/jquery.fancybox.min.js?v=328" type="text/javascript"></script>

<script src="//theme.hstatic.net/200000565469/1000915384/14/slick.min.js?v=328" type="text/javascript"></script>
<!-- SCRIPT THEME -->
<script src="//theme.hstatic.net/200000565469/1000915384/14/scripts.js?v=328" defer=""></script>
<script>
var formatMoney = '{{amount}}₫';
var template = "product";
var priceMin ='';

var locationHeader = false;

/* Fix app buyXgetY */
var cartItem = {
		"1091315605": 1,		"1105703151": 1};

var promotionApp = false,
		promotionApp_name = '';

var productReviewsApp = false;
var productReviewsProloop = false;

/* product set item */
var prodItem_desk = 5,
		prodItem_mobile = 2;
prodItem_desk = 6

prodItem_mobile = 2

</script>
<script>
	var currentId = 1041840085;
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
        function updateInput(selectId) {
            // Lấy giá trị của các select
            var city = document.getElementById('city').value;
            var district = document.getElementById('district').value;
            var ward = document.getElementById('ward').value;

            // Hiển thị giá trị đã chọn trong input
            var selectedOptionsInput = document.getElementById('selectedOptions');
            selectedOptionsInput.value = city + (city && district ? ', ' : '') + district + (district && ward ? ', ' : '') + ward;
        }
    </script>

    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
            method: "GET", 
            responseType: "application/json", 
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Name);
            }
            citis.onchange = function () {
                district.length = 1;
                ward.length = 1;
                if(this.value != ""){
                    const result = data.filter(n => n.Name === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Name);
                    }
                }

                // Gọi hàm updateInput để cập nhật giá trị của input
                updateInput('city');
            };
            district.onchange = function () {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Name === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Name);
                    }
                }

                // Gọi hàm updateInput để cập nhật giá trị của input
                updateInput('district');
            };
        }
    </script>
</body>

</html>