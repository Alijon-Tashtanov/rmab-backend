@extends('admin.layouts.app')
@section('title')
    Biz haqimizda
@endsection
@section('content')
    <x-headers title="Biz haqimizda" icon="fas fa-circle" parent="Biz haqimizda" parent-route="admin.abouts.index"
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
                    <th>Email</th>
                    <td>{{$response->email}}</td>
                </tr>
                <tr>
                    <th>Telefon raqami</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [uz]</th>
                    <td>{{$response->getTranslation('title','uz')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [ru]</th>
                    <td>{{$response->getTranslation('title','ru')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [en]</th>
                    <td>{{$response->getTranslation('title','en')}}</td>
                </tr>
                <tr>
                    <th>Qisqa tavsif [uz]</th>
                    <td>{{$response->getTranslation('description','uz')}}</td>
                </tr>
                <tr>
                    <th>Qisqa tavsif [ru]</th>
                    <td>{{$response->getTranslation('description','ru')}}</td>
                </tr>
                <tr>
                    <th>Qisqa tavsif [en]</th>
                    <td>{{$response->getTranslation('description','en')}}</td>
                </tr>
                <tr>
                    <th>Kontent [uz]</th>
                    <td>{!!$response->getTranslation('content','uz') !!}</td>
                </tr>
                <tr>
                    <th>Kontent [ru]</th>
                    <td>{!!$response->getTranslation('content','ru')!!}</td>
                </tr>
                <tr>
                    <th>Kontent [en]</th>
                    <td>{!!$response->getTranslation('content','en')!!}</td>
                </tr>
                <tr>
                    <th>Manzil [uz]</th>
                    <td>{{$response->getTranslation('address','uz')}}</td>
                </tr>
                <tr>
                    <th>Manzil [ru]</th>
                    <td>{{$response->getTranslation('address','ru')}}</td>
                </tr>
                <tr>
                    <th>Manzil [en]</th>
                    <td>{{$response->getTranslation('address','en')}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
