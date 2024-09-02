<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <nav class="navbar bg-body-tertiary w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/img.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                پرداخت انلاین
            </a>
        </div>
    </nav>
</div>

<div class="container-lg">
    <div class="card" style="margin-top: 40px">

        <div class="card-header">
            اطلاعات کارت
        </div>

        <div class="card-body" <div class="row">
            <div class="mb-2">
                <div class="col-auto">
                    <div class="input-group">
                        <div class="input-group-text">انتخاب کارت</div>
                        <select id="chose-card" class="form-select">
                            <option selected>هیچکدام</option>
                            <option value="1">1234567890</option>
                            <option value="2">2345678901</option>
                            <option value="3">3456789012</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="col-auto">
                    <div class="input-group">
                        <div class="input-group-text">شماره کارت</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup">
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <a class="btn btn-primary disabled placeholder col-4 align-content-center w-100 mb-2"
                       aria-disabled="true">درصورتی که رمز یکبار مصرف ندارید، روی دکمه "درخواست رمز پویا" کلیک
                        کنید</a>
                </div>
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-text">
                            <!-دکمه-->
                            <button value="دریافت رمز یکبار مصرف" class="btn btn-success"
                                    data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
                                    aria-expanded="false" aria-controls="collapseWidthExample">
                                دریافت رمز یکبار مصرف
                            </button>
                        </div>
                        <input type="text" class="form-control" id="autoSizingInputGroup">
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="col-auto">
                    <div class="input-group">
                        <div class="input-group-text">شماره شناسایی دوم</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup">
                    </div>
                </div>
            </div>
            <form class="row align-items-center mb-2">
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">سال</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group-text">ماه</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup">
                    </div>
                </div>
            </form>
            <div class="col-auto mb-2">
                <div class="input-group">
                    <div class="input-group-text">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                ذخیره
                            </label>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="autoSizingInputGroup"
                           placeholder="آدرس ایمیل (اختیاری)">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    ذخیره شماره کارت و تاریخ انقضا در سامانه ملت
                </label>
            </div>
        </div>
        <div class="card-footer">
            <button id="bl" class="btn btn-danger col-5">انصراف</button>
            <button id="bl" class="btn btn-success col-5">پرداخت</button>
        </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
