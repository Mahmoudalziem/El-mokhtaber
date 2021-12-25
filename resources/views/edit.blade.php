@extends('layouts.default')

@section('title')
    تعديل التحليل
@endsection

@section('links')
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
@endsection

@section('content')
<div class="form-add">
    <div class="container position-relative">
        <h1 style="text-align: center;padding: 50px;font-size:60px;color:#fff">
            <a href="/all">
                معمل المختبر
            </a>
        </h1>
        @if (session()->has('message'))
        <div class="alert alert-success mt-2 mx-auto message" style="border-radius:0;text-align:center;font-size:30px"
            role="alert">
            {{ session('message') }}
        </div>
    @endif
        <form class='mainform' method="post" action="{!! route('update',$data->client_id) !!}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content">
                        <h1>التقرير الاول</h1>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $data->name }}" id="patientName"
                                name="name" placeholder="اسم المريض">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $data->age }}" name="age" id="patientAge"
                                placeholder="سن المريض">
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>




                    <div class="mb-3">
                        <input type="text" class="form-control date" value="{{ $data->register }}" name="register"
                            id="register" placeholder="تاريخ التسجيل">
                        @error('register')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ $data->collect }}" name="collect"
                            id="collect" placeholder="تاريخ التحصيل">
                        @error('collect')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ $data->auth }}" name="auth" id="auth"
                            placeholder="تاريخ التصديق">
                        @error('auth')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ $data->print }}" name="print" id="print"
                            placeholder="تاريخ الطباعة">
                        @error('print')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select name="gender" id="inputState" class="form-select">
                            <option value="">اختار الجنس ...</option>
                            <option selected="{{ $data->gender === 'male' ? true : '' }}" value="male">ذكر</option>
                            <option selected="{{ $data->gender === 'female' ? true : '' }}" value="female">انثي</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="content">
                        <h1>التقرير الثاني</h1>


                        <div class="mb-3">
                            <input type="text" class="form-control date" value="{{ $data->visit_date }}"
                                name="visit_date" id="visit_date" placeholder="تاريخ الزيارة">
                            @error('visit_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control date" value="{{ $data->pay_date }}" name="pay_date"
                                id="pay_date" placeholder="تاريخ الدفع">
                            @error('pay_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control date" value="{{ $data->result_date }}"
                                name="result_date" id="result_date" placeholder="تاريخ النتيجة">
                            @error('result_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <select name="branch" id="inputState" class="form-select">
                                <option value="">اختار الفرع ...</option>
                                <option selected="{{ $data->branch === 'Naga Hamady' ? true : '' }}" value="Naga Hamady">نجح حمادي</option>
                                <option selected="{{ $data->branch === 'Mansoura 3 (Gehan)' ? true : '' }}" value="Mansoura 3 (Gehan)">المنصورة</option>
                                <option selected="{{ $data->branch === 'Zagazig (Gehan)' ? true : '' }}" value="Zagazig (Gehan)">الشرقية</option>
                            </select>
                            @error('branch')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $data->pay_username }}"
                                name="pay_username" id="pay_username" placeholder="اسم الدافع">
                            @error('pay_username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $data->price }}" name="price" id="price"
                                placeholder="السعر">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ $data->visit }}" name="visit" id="visit"
                                placeholder="رقم الزيارة">
                            @error('visit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <select name="result" id="inputState" class="form-select">
                        <option value="">اختار التحليل</option>
                        <option selected="{{ $data->result === 'negative' ? true : '' }}" value="negative">سالب</option>
                        <option selected="{{ $data->result === 'postive' ? true : '' }}" value="postive">موجب</option>
                    </select>
                    @error('result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-auto">تعديل</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection

@section('scripts')
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $("#register").datetimepicker({
            format: 'dd-mm-yyyy HH:mm:ss',
            pick12HourFormat: false,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
        $("#print").datetimepicker({
            format: 'dd-mm-yyyy HH:mm:ss',
            showMeridian: false,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
        $("#auth").datetimepicker({
            format: 'dd-mm-yyyy HH:mm:ss',
            use24hours: true,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        $("#collect").datetimepicker({
            format: 'dd-mm-yyyy HH:mm:ss',
            use24hours: true,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        /////


        $("#visit_date").datetimepicker({
            format: 'dd MM yyyy',
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });


        $("#pay_date").datetimepicker({
            format: 'dd MM yyyy',
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        $("#result_date").datetimepicker({
            format: 'dd MM yyyy',
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
    </script>
@endsection
