@extends('layouts.user.userlayout')

@section('title', 'category')


@section('content')
<main style="display: flex;justify-content: center; flex-direction: column; max-width: 700px;margin:0 auto;">
        <h3 style="text-align: center;">კატეგორიები</h3>
        <a style="width: 200px;margin: 10px 0;" href="{{url('user/addcategory')}}" class="btn btn-primary">კატეგორიის დამატება</a>
        <table class="table">
            <thead>
                <tr>
                    <th>კატეგორია</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($Category as $item)

                <tr>
                    <td>{{$item->title}}</td>
                    <td>
                        <a href="{{url('user/editcategory',$item->id)}}"><i class="fa fa-edit"></i></a>
                        <a href="{{url('user/deletecategory',$item->id)}}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection