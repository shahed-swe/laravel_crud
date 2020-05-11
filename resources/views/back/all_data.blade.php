@extends('master.master')
<!-- section started -->
@section('content')
<style>
    table {
        margin-top: 50px;
    }
    
    th {
        color: gray;
    }
    
    td {
        color: white;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 col-md-10 col-sm 12 mx-auto">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Slug</th>
                        <th>Titlte</th>
                        <th>Summary</th>
                        <th>Description</th>
                    </tr>
                </thead>
                @foreach($post as $p)
                <tbody>
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->slug}}</td>
                        <td>{{$p->post_title}}</td>
                        <td>{{$p->post_summary}}</td>
                        <td>{{$p->description}}
                            <a href="{{URL::to('edit_details/'.$p->id)}}" class="btn btn-sm btn-info float-right" style="margin-left:2px">Edit</a>
                            <a href="{{URL::to('delete_details/'.$p->id)}}" class="btn btn-sm btn-danger float-right" id="delete_btn" style="margin-left:2px">Delete</a>
                            <a href="{{URL::to('view_details/'.$p->id)}}" class="btn btn-sm btn-success float-right" style="margin-left:2px">View</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection