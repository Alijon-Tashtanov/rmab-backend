@extends('admin.layouts.app')
@section('title')
    {{$response->full_name}}
@endsection
@section('content')
    <x-headers title="{{$response->full_name}}" icon="fas fa-circle" parent="Jo’natma haqida ma’lumot olish"
               parent-route="admin.informationaboutshipments.index"
               parent-icon=""/>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                            class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{$response->id}}</td>
                </tr>
                <tr>
                    <th>F.I.SH</th>
                    <td>{{$response->full_name}}</td>
                </tr>
                <tr>
                    <th>Telefon raqami</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>Jo’natma raqami</th>
                    <td>{{$response->shipment_number}}</td>
                </tr>
                <tr>
                    <th>Jo’natma kuni</th>
                    <td>{{$response->shipping_date}}</td>
                </tr>
                <tr>
                    <th>Viloyat nomi</th>
                    <td>{{$response->region?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Tuman/Shahar nomi</th>
                    <td>{{$response->district?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Xizmat nomi</th>
                    <td>{{$response->service?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>{!! $response->getStatusBadgeName() !!}</td>
                </tr>
                <tr>
                    <th>Yuboruv geografiyasi</th>
                    <td>{{$response->dispatchGeography?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Yaratilgan vaqti</th>
                    <td>{{$response->created_at}}</td>
                </tr>
                <tr>
                    <th>Tahrirlangan vaqti</th>
                    <td>{{$response->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
