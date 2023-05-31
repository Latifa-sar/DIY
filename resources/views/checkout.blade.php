@extends('layouts.app')
@section('content')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=yJgTYN5XWanuJPrJZePa9O1VW1GLSiYRPriEKK5MhkcOZyRN67IP2F8S7jPxK1Cmgo4JMBlcfeF-R0-I5fNg0Mj_ShDA8g2ecQf8gzDIMAk" charset="UTF-8"></script><style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src=".../img/brush.png"  width="72" height="57">
      <h2>تأكيد الشراء</h2>
      
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div class="d-flex justify-content-start">
            <div class="col-md-2 col-lg-2 col-xl-2 " style="margin-right: 15px;">
              <img
              src="img\{{$products->img}}"
              class="img-fluid rounded-3 "  alt="pic">
            </div>

            <div>
              <h6 class="my-0">{{$products->name}}</h6>
              <small class="text-muted">{{$products->description}}</small>
            </div>
            </div>
            <span class="text-muted">{{$products->price}}</span>
          </li>
         
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>{{$products->price}}</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8" style="font-family: Tajawal">
        <h4 class="mb-3">معلومات التوصيل</h4>
        <form class="needs-validation" id="Billing" action="{{route('invoice')}}" method="post" >
          @csrf
          <input type="hidden" id="productName" name="productName" value={{$products->name}}>
          <input type="hidden" id="total" name="total" value={{$products->price}}>
         
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="fname" class="form-label">الاسم الاول</label>
              <input type="fname" class="form-control" id="fname" placeholder="" name="fname"required>
              <div class="invalid-feedback">
                مطلوب الاسم الأول .
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lname" class="form-label">الاسم الاخير</label>
              <input type="lname" class="form-control" id="lname" name="lname" placeholder="" required>
              <div class="invalid-feedback">
                مطلوب الاسم الاخير .
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">اسم المستخدم</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                مطلوب الاسم المستخدم.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="Email" class="form-label">الايمبل <span class="text-muted">(اخياري)</span></label>
              <input type="email" class="form-control" name="Email" id="Email" placeholder="you@example.com">
              <div class="invalid-feedback">
                الرجاء إدخال عنوان بريد إلكتروني صالح لتحديثات الشحن.
              </div>
            </div>

            <div class="col-12">
              <label for="Address" class="form-label">العنوان</label>
              <input type="Address" class="form-control"name="Address" id="Address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                يرجى إدخال عنوان الشحن الخاص بك.
              </div>
            </div>

            <div class="col-12">
              <label for="Address2" class="form-label">العنوان اخر <span class="text-muted">(اخياري)</span></label>
              <input type="Address2" class="form-control" name="Address2" id="Address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label  for="Country" class="form-label">البلد</label>
              <select name="Country" class="form-select"  id="Country" required>
                <option >اختر...</option>
                <option>المملكة العربية السعودية</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="State" class="form-label">المنطقة</label>
              <select name="State" class="form-select" id="State" required>
                <option >اختر...</option>
                <option>القصيم</option>
                <option>الرياض</option>
                <option>جدة</option>
                <option>الدمام</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="Zip" class="form-label">الرمز البريدي</label>
              <input type="text" class="form-control" name="Zip" id="Zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label"  for="same-address">عنوان الشحن هو نفسه عنوان إرسال الفواتير الخاص بي</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">احفظ هذه المعلومات في المرة القادمة</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">طريقة الدفع</h4>

          <div class="my-3">
            
            <div class="form-check">
             
              <input  id="credit" name="Payment" value="1" type="radio" class="form-check-input" checked required>
              <label class="form-check-label"  for="Payment">البطاقة الائتمانية\الخصم</label>
            </div>
            <div class="form-check">
              <input  id="paypal" name="Payment" value="0" type="radio" class="form-check-input"  required>
              <label class="form-check-label" for="Payment">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="NameOnCard" class="form-label">الاسم على البطاقة</label>
              <input type="text" name="NameOnCard"  class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">الاسم الكامل كما هو معروض على البطاقة</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="CreditCardNum" class="form-label">رقم البطاقة الائتمانية</label>
              <input type="text" name="CreditCardNum" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="Expiration" class="form-label">انتهاء الصلاحية</label>
              <input type="text" class="form-control" name="Expiration"  id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="CVV" class="form-label">CVV</label>
              <input type="text" class="form-control" name="CVV" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">تأكيد الشراء</button>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>


@endsection