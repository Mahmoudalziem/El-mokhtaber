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
    <link rel="icon" href="/img/logo.png">
    <link rel="stylesheet" href="{{ public_path('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ public_path('/css/report.css') }}" />
</head>

<body>

    <div class="body-container">
        <header>
            <div>
                <h2>اسم الفرع المنصورة 3</h2>
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
                    <div>
                        <h4>Registered</h4>
                        <p>{{ $data->register }}</p>
                    </div>
                    <div>
                        <h4>collected</h4>
                        <p>{{ $data->collect }}</p>
                    </div>
                    <div>
                        <h4>Authenticated</h4>
                        <p>{{ $data->auth }}</p>
                    </div>
                    <div>
                        <h4>printed</h4>
                        <p>{{ $data->print }}</p>
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
            <div class="qr-code">
                {{-- <img src='{{ public_path('/img/qr.png') }}' alt=""> --}}
                {!! QrCode::size(250)->generate(url('qr-code/' . $data->client_id)) !!}
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
        <div class="table">
            <div>Item Type</div>
            <div>Item Name</div>
            <div>Value</div>
            <div>Test</div>
            <div>Immunity PCR</div>
            <div>{{ $data->price }}</div>
        </div>
        <div class="price">
            <div class="container">
                <div class="row">
                    <div class="col-9">
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
                    <div class="col-3">
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
