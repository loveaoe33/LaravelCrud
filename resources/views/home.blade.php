@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">重仁骨科醫院</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                    
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="adminView">{{ Auth::user()->name }}您好按此進入留言板 <a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
