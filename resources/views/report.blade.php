<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>طباعة نقرير</title>
    <meta name="description" content="Hello El-Mokhtaber" />
    <meta name="author" content="Mahmoud Abd Alziem" />
    <link rel="icon" href="{{ public_path('/img/logo.png') }}">
    <link rel="stylesheet" href="{{ public_path('/css/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ public_path('/css/report.css') }}" /> --}}
    <style>
        html {
            -webkit-print-color-adjust: exact;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .body-container {
            padding: 30px;
            direction: ltr;
            background: #fff;
        }

        .body-container header {
            display: flex;
            justify-content: space-between;
            text-align: right;
            align-items: center;
        }

        .body-container header div:first-child {
            line-height: 40px;
        }

        .body-container header div.info h2 {
            font-size: 25px;
        }

        .body-container .container-fluid {
            height: 242px;
            padding: 0;
            border: solid 2px grey;
            display: grid;
            grid-template-columns: 1fr 2fr;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .body-container .container-fluid .left {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: 120px 95px;
        }

        .body-container .container-fluid .left div {
            border: solid 1.5px black;
            padding:0 10px;
        }

        .body-container .container-fluid .left .name {
            grid-column: span 3;
            padding-top: 30px;
        }

        .body-container .container-fluid .left .name h4 {
            color: #4550dd;
        }

        .body-container .container-fluid .left .name h3 {
            padding: 2px;
        }

        .body-container .container-fluid .right {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 120px 95px;
        }

        .body-container .container-fluid .right>div {
            border: solid 1.5px black;
        }

        .body-container .container-fluid .right .date {
            display: flex;
            grid-template-rows: repeat(2, 59px);
            grid-column: span 3;
            align-items: center;
        }

        .body-container .container-fluid .right .date .date-content {
            display: flex;
            text-align: left;
        }

        .body-container .container-fluid .right .date .col-5,
        .body-container .container-fluid .right .date .col-2 {
            text-align: left;
        }

        .body-container .container-fluid .right .date .top,
        .body-container .container-fluid .right .date .bottom {
            display: flex;
        }

        .body-container .container-fluid .right .date h4 {
            margin-right: 8px;
            width: 180px;
            text-transform: capitalize;
        }

        .body-container .container-fluid .right .date p {
            margin-bottom: 3px !important;
            font-size: 14px;
            font-weight: 700;
        }

        .body-container .container-fluid .right .client-id {
            padding: 0 20px;
        }

        .body-container .container-fluid .left,
        .body-container .container-fluid .right {
            padding: 10px;
        }

        .body-container .container-fluid h3 {
            padding-top: 30px;
            margin-bottom: 5px;
            font-size: 19px;
        }

        .body-container .result {
            display: flex;
            flex-direction: column;
        }

        .body-container .result .top-title {
            text-align: center;
            margin-inline: auto;
            font-size: 20px;
            width: 100%;
            background-color: #eac7c5;
            padding-block: 4px;
            border: 2px solid #000;
        }

        .body-container .result .lab-title {
            padding: 25px;
            width: 90%;
            float: left;
            padding-left: 5px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: 50px 35px;
        }

        .body-container .result .lab-title h4 {
            text-transform: capitalize;
        }

        .body-container .first-footer {
            width: 100%;
            min-height: 30px;
            margin-bottom: 5rem;
        }

        .body-container .first-footer img {
            width: 100%;
        }

        .body-container .header2 {
            padding-top: 40px;
            width: 100%;
            text-align: center;
        }

        .body-container .container2 {
            height: 215px;
            border: solid 2px grey;
            display: grid;
            grid-template-columns: 1fr 2fr;
            margin-block: 10px;
        }

        .body-container .container2 .left {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: 120px 95px;
        }

        .body-container .container2 .left div {
            border: solid 1.5px black;
        }

        .body-container .container2 .left .name {
            grid-column: span 3;
            padding-top: 30px;
        }

        .body-container .container2 .left .name h4 {
            color: #4550dd;
        }

        .body-container .container2 .left .name h3 {
            padding-top: 15px;
        }

        .body-container .container2 .right {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: 120px 95px;
        }

        .body-container .container2 .right div {
            border: solid 1.5px black;
        }

        .body-container .container2 .right .date {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 59px);
            grid-column: span 3;
        }

        .body-container .container2 .right .date div {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .body-container .container2 .right .date h4 {
            margin-right: 8px;
        }

        .body-container .container2 h3 {
            padding-top: 30px;
            margin-bottom: 5px;
        }

        .body-container .table .col-md-4 {
            position: relative;
            padding: 0 !important;
            border: 1px solid #000;
        }

        .body-container .table .col-md-4 .header {
            background-color: #bfbbbb;
        }

        .body-container .price {
            grid-template-columns: 3fr 1fr;
            margin-top: 30px;
        }

        .body-container .price .left {
            display: flex;
            flex-direction: column;
        }

        .body-container .price .left .top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            line-height: 2rem;
        }

        .body-container .price .left .bottom {
            border: solid 1.5px #afa9a9ad;
            text-align: center;
            padding: 10px 20px;
        }

        .body-container .price .right {
            display: flex;
            flex-direction: column;
        }

        .body-container .price .right div {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            line-height: 1.7rem;
        }

        .body-container .footer2 {
            width: 100%;
        }

        .body-container .footer2 img {
            width: 100%;
        }

        .body-container .main-body {
            height: 37rem;
        }

        .body-container .extra {
            display: flex;
            justify-content: space-between;
        }

        .body-container .extra .scan {
            background: #000;
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            border-radius: 20px 20px 0 0;
        }

    </style>
</head>

<body>

    <div class="body-container">
        <header>
            <div>
                <h2>اسم الفرع الزقازيق</h2>
                <h2>مدير الفرع د.احمد عبدالوكيل</h2>
                <h2>مدير الوحده ا.د. عزة العدوي</h2>
                <h2>طبيب الوحده د.ايمان ياسين</h2>
            </div>
            <div>
                <img width="300px" height="110px" src="{{ public_path('/img/logo.png') }}" alt="">
            </div>
            <div class="info">
                <h2>رئيس مجلس الادارة</h2>
                <h2>ا.د.مؤمنه كامل</h2>
                <h2>مدير المعامل</h2>
                <h2>ا.د.هند الشربيني</h2>
            </div>
        </header>
        <div class="container-fluid">
            <div class="left">
                <div class="name">
                    <h4>PATIENT NAME</h4>
                    <h3>{{ $data->name }}</h3>
                </div>
                <div class="visit">
                    <h3>Visit Number</h3>
                    <p>{{ $data->visit }}</p>
                </div>
                <div class="age">
                    <h3>Age</h3>
                    <p>{{ $data->age }}</p>
                </div>
                <div class="gender">
                    <h3>Gender</h3>
                    <p>{{ $data->gender }}</p>
                </div>
            </div>
            <div class="right">
                <div class="date">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="date-content">
                                    <h4>Registered</h4>
                                    <p>{{ $data->register }}</p>
                                </div>
                                <div class="date-content">
                                    <h4>collected</h4>
                                    <p>{{ $data->collect }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="date-content">
                                    <h4>Authenticated</h4>
                                    <p>{{ $data->auth }}</p>
                                </div>
                                <div class="date-content">
                                    <h4>printed</h4>
                                    <p>{{ $data->print }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referred">
                    <h3>Referred By</h3>
                    <p>Prof : - </p>
                </div>
                <div class="client-id">
                    <h3>Clint ID</h3>
                    <p>{{ $data->client_id }}</p>
                </div>
            </div>
        </div>
        <div class="result">
            <div class="top-title">
                MOLECULAR BIOLOGY REPORT
            </div>
            <div class="lab-title">
                <h4>Test Name</h4>
                <h4>Result</h4>
                <h4>Unit</h4>
                <h4>Reference Range</h4>
                <h4>Covid 19 by PCR</h4>
                <h4>{{ $data->result }}</h4>
                <h4> </h4>
                <h4>Negative</h4>
            </div>
            <h3>N.B. :Source: Nasopharyngeal Swab</h3>
        </div>
        <div class="main-body"></div>
        <div class="extra">
            <div class="text-center" style="padding-left : 50px">
                <div class="scan">Scan Me !</div>
                <div class="qr-code">
                    {!! QrCode::size(250)->generate(url('qr-code/' . $data->client_id)) !!}
                </div>
            </div>
            <div class="signature">
                <img src='{{ public_path('/img/sign.png') }}' alt="">
            </div>
        </div>
        <div class="first-footer">
            <img src='{{ public_path('/img/footer.png') }}' alt="">
        </div>
        <div class="header2">
            <img src='{{ public_path('/img/logo2.png') }}' alt="">
        </div>
        <div class="container-fluid">
            <div class="left">
                <div class="name">
                    <h4>PATIENT NAME</h4>
                    <h3>{{ $data->name }}</h3>
                </div>
                <div class="visit">
                    <h3>Visit Number</h3>
                    <p>{{ $data->visit }}</p>
                </div>
                <div class="age">
                    <h3>Age</h3>
                    <p>{{ $data->age }}</p>
                </div>
                <div class="gender">
                    <h3>Patient ID</h3>
                    <p>{{ $data->patient_id }}</p>
                </div>
            </div>
            <div class="right">
                <div class="date">
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <div class="top">
                                    <h4>Visit Date:</h4>
                                    <p>{{ $data->visit_date }}</p>
                                </div>
                                <div class="bottom">
                                    <h4>Result Date:</h4>
                                    <p>{{ $data->result_date }}</p>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="top">
                                    <h4>Payment Date:</h4>
                                    <p>{{ $data->pay_date }}</p>
                                </div>
                                <div class="bottom">
                                    <h4> Receipt No:</h4>
                                    <p>28485</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="top">
                                    <h4>Branch</h4>
                                </div>
                                <div class="bottom">
                                    <p>{{ $data->branch }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referred">
                    <h3>Referred By</h3>
                    <p>-</p>
                </div>
                <div class="client-id">
                    <h3>Insurance No</h3>
                    <p>000</p>
                </div>
                <div class="client-id">
                    <h3>Customer</h3>
                    <p>تعاقدات شركات سياحية - محافظات</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-11">
                <div class="table">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="header">Item Type</div>
                            <div class="footer">Test</div>
                        </div>
                        <div class="col-md-4">
                            <div class="header">Item Type</div>
                            <div class="footer">Immunity PCR</div>
                        </div>
                        <div class="col-md-4">
                            <div class="header">Value</div>
                            <div class="footer">{{ $data->price }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="price">
            <div class="container" style="max-width:1050px">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="left">
                            <div class="top">
                                <div class="left-info">
                                    <h3>Current Receipt Amount:</h3>
                                    <h3>Payment User Name:</h3>
                                    <h3>Payment Date Time:</h3>
                                </div>
                                <div class="right-info">
                                    <h3>{{ $data->price }}</h3>
                                    <p>{{ $data->pay_username }}</p>
                                    <p>{{ $data->result_date }}</p>
                                </div>
                            </div>
                            <div class="bottom">
                                <h1>إجمالي المدفوع {{ $data->price }} جنيه</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="right">
                            <div>
                                <h3>Total Amount:</h3>
                                <p>{{ $data->price }}</p>
                            </div>
                            <div>
                                <h3>Discount:</h3>
                                <p>0</p>
                            </div>
                            <div>
                                <h3>Final Amount:</h3>
                                <p>{{ $data->price }}</p>
                            </div>
                            <div>
                                <h3>Total Received:</h3>
                                <p>{{ $data->price }}</p>
                            </div>
                            <div>
                                <h3>Balance Amount:</h3>
                                <p>0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body"></div>
        <div class="footer2">
            <img src="{{ public_path('/img/footer2.png') }}" alt="">
        </div>
    </div>
    <script src="{{ public_path('/js/app.js') }}"></script>
</body>

</html>
