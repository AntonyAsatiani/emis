@extends('layouts.user.userlayout')

@section('title', 'category')


@section('content')
<main style="display: flex;justify-content: center; flex-direction: column; max-width: 700px;margin:0 auto;">
        <h3 style="text-align: center;">კატეგორიები</h3>
        <a style="width: 200px;margin: 10px 0;" href="addcategory.html" class="btn btn-primary">კატეგორიის დამატება</a>
        <table class="table">
            <thead>
                <tr>
                    <th>კატეგორია</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>კატეგორია 1</td>
                    <td>
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>კატეგორია 1</td>
                    <td>
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

@endsection