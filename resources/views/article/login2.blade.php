@extends('layouts.app')
@section('content')

<section class="container box">
</table>
<h1 align="center" ><span style="font-weight:bold;">重仁骨科醫院留言登入系統</span></h1></br>
<h1 align="center" ><img src="{{ URL::asset('123.png') }}" id="img"/></h1></br>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif


<form method='post' action='section'>

<div class="form-group" >
{{ csrf_field() }}
<div class="form-group" >
<label>請輸入mail</label>
<input type="email"  class="form-control" placeholder="Enter your mail" class='form-control' ><br>
</div>
<div class="form-group" >
<label>請輸入password</label>
<input type="password"  class="form-control"placeholder='Enter your password' class='form-control'></br>
<input type="submit" value="登入" button class="btn btn-danger">
</div>
</div>
</form>
</table>
</section>
@stop