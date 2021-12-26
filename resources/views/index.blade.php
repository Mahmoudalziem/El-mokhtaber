@extends('layouts.default')

@section('title')
    كل تحليل
@endsection


@section('links')
<link rel="stylesheet" href="/css/all.css" />
@endsection

@section('content')
<div class="container-fluid">
    <table class="table mx-auto mt-5 table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">السن</th>
                <th scope="col">النتيجة</th>
                <th scope="col">رقم الحالة</th>
                <th scope="col">تاريخ التسجيل</th>
                <th scope="col">العمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->result }}</td>
                    <td>{{ $item->client_id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="actions">
                        <a href={{ url('qr-code/' . $item->client_id) }} target='_blank'>
                            <button class="btn btn-primary"> مشاهدة</button>
                        </a>
                        <a href={{ url('edit/' . $item->client_id) }} target='_blank'>
                            <button class="btn btn-primary"> تعديل</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <section class="pagination">
        {{ $data->links() }}
    </section>
</div>
@endsection
