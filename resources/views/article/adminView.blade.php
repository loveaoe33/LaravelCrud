

@extends('layouts.app')
@section('content')

<section class="container">

<a href="{{ url('article/create') }}" role='btn' class='btn btn-primary pull-right'>新增</a></td>
<table class="table tableh-over">
@foreach ($query as $var)
<tr>
<td>{{ $var->id }}</td>
<td>{{ $var->title }}</td>
<td><a href="{{ url('article/'.$var->id.'/edit') }}" role='btn' class='btn btn-primary'>編輯</a></td>

<td>
<form action="{{ url('article/'.$var->id) }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token()}}">
<input type="hidden" name="_method" value="delete">
<input type="submit" value="刪除"  role="btn" class="btn btn-danger" >
</form> 
</td>
</tr>
@endforeach
</table>
</section>
@stop
