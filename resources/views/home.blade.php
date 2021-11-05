@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><strong>โปรไฟล์</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h5><p>ข้อมูลของคุณ</p></h5>
                    <p><strong>ชื่อผู้ใช้ :</strong> {{Auth::user()->name}}</p>
                    <p><strong>อีเมล :</strong> {{Auth::user()->email}}</p>
                    <p><strong>วันที่คุณสมัคร :</strong> {{Auth::user()->created_at}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
