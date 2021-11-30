<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Find Patient</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href={{URL::asset('css/style.css')}} rel='stylesheet' ></link>
    <style>
        .dataform{
            text-align: center;
            margin: 10rem auto;
            width: 38rem;
            border: solid 1.8px black;
            border-radius: 1rem;
            background-color: rgb(199, 199, 199);
            height:1.8rem;
        }
        .search{
            width: 35rem;
            height:1.6rem;
            border-radius: 0 1rem 1rem 0;
            border: none;
            float: right;
        }
        .search:focus{
            outline: none;
        }
        .search-button{
            height:1.8rem;
            line-height: 1.8rem;
            background: transparent;
            border: none;
            cursor: pointer;
        }
        i{
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="dataform">
        <form id="dataform"> 
            @csrf
            <button type="submit" class="search-button"><i class='bx bx-search bx-flip-horizontal' ></i></button>
            <input type="text" name="search" class="search" id="search" placeholder="Enter Client ID">
        </form>
    </div>
    <div id="report" style="display:none;margin:25px">
        <div class="body-container">
            <header>
                <div>
                    <h4>اسم الفرع    نجع حمادي</h4>
                    <h4>مدير الفرع    د.غادة حشمت</h4>
                    <h4>مدير الوحده    د.مني محسن</h4>
                </div>
                <div>
                    <img width="300px" height="110px" src={{URL::asset('img/logo.png')}} alt="">
                </div>
                <div class="info">
                    <h2>رئيس مجلس الادارة</h2>
                    <h2>ا.د.مؤمنه كامل</h2>
                    <h2>مدير المعامل</h2>
                    <h2>ا.د.هند الشربيني</h2>
                </div>
            </header>
            <div class="container">
                <div class="left">
                    <div class="name">
                        <h4>PATIENT NAME</h4>
                        <h3 id="name"></h3>
                    </div>
                    <div class="visit">
                        <h3>Visit Number</h3>
                        <p id="visit_number"></p>
                    </div>
                    <div class="age">
                        <h3>Age</h3>
                        <p id="age"></p>
                    </div>
                    <div class="gender">
                        <h3>Gender</h3>
                        <p id="gender"></p>
                    </div>
                </div>
                <div class="right">
                    <div class="date">
                        <div>
                            <h4>Registered:</h4>
                            <p id="created_at"></p>
                        </div>
                        <div>
                            <h4>collected:</h4>
                            <p id="updated_at"></p>
                        </div>
                        <div>
                            <h4>Authenticated:</h4>
                            <p id="created_at2"></p>
                        </div>
                        <div>
                            <h4>printed:</h4>
                            <p id="updated_at2"></p>
                        </div>
                    </div>
                    <div class="referred">
                        <h3>Referred By</h3>
                        <p>prof:-</p>
                    </div>
                    <div class="client-id">
                        <h3>Clint ID</h3>
                        <p id="client_id"></p>
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
                    <h4 id="result">Negative</h4>
                    <h4> </h4>
                    <h4>Negative</h4>
                </div>
                <h3>N.B. :Source: Nasopharyngeal Swab</h3>
            </div>
            <div class="main-body"></div>
            <div class="extra">
                <div class="qr-code">
                    <img src={{URL::asset('img/qr.png')}} alt="">
                </div>
                <div class="signature">
                    <img src={{URL::asset('img/sign.png')}} alt="">
                </div>
            </div>
            <div class="first-footer">
                <img src={{URL::asset('img/footer.png')}} alt="">
            </div>
            <div class="header2">
                <img src={{URL::asset('img/logo2.png')}} alt="">
            </div>
            <div class="container2">
                <div class="left">
                    <div class="name">
                        <h4>PATIENT NAME</h4>
                        <h3 id="name2"></h3>
                    </div>
                    <div class="visit">
                        <h3>Visit Number</h3>
                        <p id="visit_number2"></p>
                    </div>
                    <div class="age">
                        <h3>Age</h3>
                        <p id="age2"></p>
                    </div>
                    <div class="gender">
                        <h3>Patient ID</h3>
                        <p id="patient_id"></p>
                    </div>
                </div>
                <div class="right">
                    <div class="date">
                        <div>
                            <h4>Visit Date:</h4>
                            <p id="created_at3"></p>
                        </div>
                        <div>
                            <h4>Payment Date:</h4>
                            <p id="created_at4"></p>
                        </div>
                        <div>
                            <h4>Branch</h4>                        
                        </div>
                        <div>
                            <h4>Result Date:</h4>
                            <p id="created_at5"></p>
                        </div>
                        <div>
                            <h4> Receipt No:</h4>
                            <p>28485</p>
                        </div>
                        <div>
                            <p>Naga Hamady</p>
                        </div>
                    </div>
                    <div class="referred">
                        <h3>Referred By</h3>
                        <p>-</p>
                    </div>
                    <div >
                        <h3>Insurance No</h3>
                        <p>000</p>
                    </div>
                    <div >
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
                <div>900</div>
            </div> 
            <div class="price">
                <div class="left">
                    <div class="top">
                        <div class="left-info">
                            <h3>Current Receipt Amount:</h3>
                            <h3>Payment User Name:</h3>
                            <h3>Payment Date Time:</h3>
                        </div>
                        <div class="right-info">
                            <h3>900</h3>
                            <p>Mohamed Ahmed Moghraby</p>
                            <p id="updated_at3"> PM</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <h1>إجمالي المدفوع 900 جنيه</h1>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <h3>Total Amount:</h3>
                        <p>900</p>
                    </div>
                    <div>
                        <h3>Discount:</h3>
                        <p>0</p>
                    </div>
                    <div>
                        <h3>Final Amount:</h3>
                        <p>900</p>
                    </div>
                    <div>
                        <h3>Total Received:</h3>
                        <p>900</p>
                    </div>
                    <div>
                        <h3>Balance Amount:</h3>
                        <p>0</p>
                    </div>
                </div>
            </div>
            <div class="main-body"></div>
            <div class="footer2">
                <img src={{URL::asset('img/footer2.png')}} alt="">
            </div>       
        </div>
    </div>
    <script src={{URL::asset('js/jquery-3.5.1.min.js')}}></script>
    <script>
        $('#dataform').submit(function(e){
            var    name=document.getElementById("name");
            var    name2=document.getElementById("name2");
            var    report=document.getElementById("report");
            var    search=document.getElementById("search").value;
            var    age=document.getElementById("age");
            var    age2=document.getElementById("age2");
            var    gender=document.getElementById("gender");
            var    result=document.getElementById("result");
            var    visit_number=document.getElementById("visit_number");
            var    visit_number2=document.getElementById("visit_number2");
            var    client_id=document.getElementById("client_id");
            var    patient_id=document.getElementById("patient_id");
            var    created_at=document.getElementById("created_at");
            var    created_at2=document.getElementById("created_at2");
            var    created_at3=document.getElementById("created_at3");
            var    created_at4=document.getElementById("created_at4");
            var    created_at5=document.getElementById("created_at5");
            var    updated_at=document.getElementById("updated_at");
            var    updated_at2=document.getElementById("updated_at2");
            var    updated_at3=document.getElementById("updated_at3");
            function parseISOString(s) {
                var b = s.split(/\D+/);
                return new Date(Date.UTC(b[0], --b[1], b[2], b[3], b[4], b[5], b[6]));
            };
            e.preventDefault();
            var formData= new FormData(this);
                $.ajax({
                    method: 'POST',
                    url: `/patient/find/${search}`,
                    dataType:'json',
                    data: formData,
                    cache:false,
                    contentType:false,
                    processData:false,
                    success: function(data, status, XHR) {
                        name.textContent=data[0].name;
                        name2.textContent=data[0].name;
                        age.textContent=data[0].age;
                        age2.textContent=data[0].age;
                        gender.textContent=data[0].gender;
                        result.textContent=data[0].result;
                        visit_number.textContent=data[0].visit_number;
                        visit_number2.textContent=data[0].visit_number;
                        client_id.textContent=data[0].client_id;
                        patient_id.textContent=data[0].patient_id;
                        created_at.textContent=parseISOString(data[0].created_at).toLocaleString();
                        created_at2.textContent=parseISOString(data[0].created_at).toLocaleString();
                        created_at3.textContent=parseISOString(data[0].created_at).toLocaleString();
                        created_at4.textContent=parseISOString(data[0].created_at).toLocaleString();
                        created_at5.textContent=parseISOString(data[0].created_at).toLocaleString();
                        updated_at.textContent=parseISOString(data[0].updated_at).toLocaleString();
                        updated_at2.textContent=parseISOString(data[0].updated_at).toDateString();
                        updated_at3.textContent=parseISOString(data[0].updated_at).toLocaleString();
                        console.log(parseISOString(data[0].updated_at).toUTCString());
                        report.style.display='block';
                    },
                    error: function(XHR, status, error) {
                        console.log(error);
                    }
                    
                });
            });
    </script>
</body>
</html>