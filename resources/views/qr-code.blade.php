@extends('layouts.default')

@section('title')
    تنزيل ال Qr-Code
@endsection


@section('links')

@endsection

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success mt-2 mx-auto message" style="border-radius:0;text-align:center;font-size:30px"
            role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="form-add">
        <div class="mx-auto qr-image">
            <img width="300px" height="110px" src="/img/logo.png" alt="">
        </div>
        <div class="qr mx-auto mt-5 text-center position-relative">
            <div id="qrCode">
                {!! QrCode::size(250)->generate(url('qr-code/' . $data->client_id)) !!}
            </div>
            <div class="content-btn">
                <div class="col-md-6 col-12 mx-auto">
                    <div class="container">
                        <div class="row">
                            {{-- <div class="col-lg-4 col-12">
                                <button class="btn btn-primary mt-5" onclick="downloadSVG()">تنزيل ال Qr-Code</button>
                            </div> --}}
                            <div class="col-lg-4 col-12">
                                <a class="btn mt-5" href="{{ route('pdf', $data->client_id) }}">Open Result</a>
                            </div>
                            {{-- <div class="col-lg-4 col-12">
                                <a class="btn mt-5" href="{{ url('report/' . $data->client_id) }}">مشاهدة
                                    التقرير</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mx-auto">
        <div class="col-md-5 mx-auto col-12 p-5 text-center">
            بناء علي زيارتك الاخيرة لمعاملنا, علي مقياس من 1 الي 10 , الي اي مدي ستقوم بترشيحنا الي اقاربك واصدقائك ؟ علما بان 10 هي بالتاكيد نعم و1 بالتاكيد لا
        </div>
        <p class="text-center">4.1 avarage based on 254 Views</p>
        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        function downloadSVG() {
            const svg = document.getElementById('qrCode').innerHTML;
            const url = URL.createObjectURL(new Blob([svg], {
                type: 'image/svg+xml'
            }));

            const svgImage = document.createElement('img');
            document.body.appendChild(svgImage);
            svgImage.onload = function() {
                const canvas = document.createElement('canvas');
                canvas.width = svgImage.clientWidth;
                canvas.height = svgImage.clientHeight;
                const canvasCtx = canvas.getContext('2d');
                canvasCtx.drawImage(svgImage, 0, 0);
                const element = document.createElement("a");
                element.download = "{{ $data->name }}.png";
                element.href = canvas.toDataURL('image/png');
                element.click();
                element.remove();
                svgImage.remove();
            };
            svgImage.src = url;
        }
    </script>
@endsection
