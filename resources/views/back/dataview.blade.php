@extends('master.master')
@section('content')
    <style>
    table {
        margin-top: 50px;
    }
    th{
        color:gray;
    }
    td {
        color: white;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 col-md-10 col-sm 12 mx-auto">
            <table class="table table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Titlte</th>
                    <th>Summary</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->slug}}</td>
                    <td>{{$p->post_title}}</td>
                    <td>{{$p->post_summary}}</td>
                    <td>{{$p->description}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection