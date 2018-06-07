
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    selamat datang di admin
                     <a href="{{ route('absensi.index') }}"><font size="6" color="grey" face="AR DECODE">Absensi
                </font></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
