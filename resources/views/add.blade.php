@extends('layouts.default')

@section('title')
    اضافة تحليل
@endsection


@section('links')
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
@endsection

@section('content')
<div class="form-add">
    {{-- <img src="img/bg.jpg" alt="background"/> --}}
    <div class="container position-relative">
        <h1 style="text-align: center;padding: 50px;font-size:60px;color:#fff">
            <a href="/all">
                معمل المختبر
            </a>
        </h1>
        <form class='mainform' method="post" action="{{ route('store') }}">
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content">
                        <h1>التقرير الاول</h1>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ old('name') }}" id="patientName"
                                name="name" placeholder="اسم المريض">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ old('age') }}" name="age" id="patientAge"
                                placeholder="سن المريض">
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>




                    <div class="mb-3">
                        <input type="text" class="form-control date" value="{{ old('register') }}" name="register"
                            id="register" placeholder="تاريخ التسجيل">
                        @error('register')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ old('collect') }}" name="collect"
                            id="collect" placeholder="تاريخ التحصيل">
                        @error('collect')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ old('auth') }}" name="auth" id="auth"
                            placeholder="تاريخ التصديق">
                        @error('auth')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input tyle="text" class="form-control date" value="{{ old('print') }}" name="print" id="print"
                            placeholder="تاريخ الطباعة">
                        @error('print')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select name="gender" id="inputState" class="form-select">
                            <option value="">اختار الجنس ...</option>
                            <option {{ old('male') == 'male' ? 'Selected' : '' }} value="male">ذكر</option>
                            <option {{ old('female') == 'female' ? 'Selected' : '' }} value="female">انثي</option>
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
                            <input type="text" class="form-control date" value="{{ old('visit_date') }}"
                                name="visit_date" id="visit_date" placeholder="تاريخ الزيارة">
                            @error('visit_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control date" value="{{ old('pay_date') }}" name="pay_date"
                                id="pay_date" placeholder="تاريخ الدفع">
                            @error('pay_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control date" value="{{ old('result_date') }}"
                                name="result_date" id="result_date" placeholder="تاريخ النتيجة">
                            @error('result_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <select name="branch" id="inputState" class="form-select">
                                <option value="">اختار الفرع ...</option>
                                <option {{ old('Naga Hamady') == 'Naga Hamady' ? 'Selected' : '' }} value="Naga Hamady">نجح حمادي</option>
                                <option {{ old('Mansoura 3 (Gehan)') == 'Mansoura 3 (Gehan)' ? 'Selected' : '' }} value="Mansoura 3 (Gehan)">المنصورة</option>
                                <option {{ old('Zagazig (Gehan)') == 'Zagazig (Gehan)' ? 'Selected' : '' }} value="Zagazig (Gehan)">الشرقية</option>
                            </select>
                            @error('branch')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ old('pay_username') }}"
                                name="pay_username" id="pay_username" placeholder="اسم الدافع">
                            @error('pay_username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ old('price') }}" name="price" id="price"
                                placeholder="السعر">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" value="{{ old('visit') }}" name="visit" id="visit"
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
                        <option {{ old('result') == 'negative' ? 'Selected' : '' }} value="negative">سالب</option>
                        <option {{ old('result') == 'postive' ? 'Selected' : '' }} value="postive">موجب</option>
                    </select>
                    @error('result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-auto">التسجيل</button>
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
            format: 'yyyy-mm-dd HH:mm:ss',
            use24hours: true,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
        $("#print").datetimepicker({
            format: 'yyyy-mm-dd HH:mm:ss',
            use24hours: true,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
        $("#auth").datetimepicker({
            format: 'yyyy-mm-dd HH:mm:ss',
            use24hours: true,
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });

        $("#collect").datetimepicker({
            format: 'yyyy-mm-dd HH:mm:ss',
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
