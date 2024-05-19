<!--By Mariana Gutierrez Jaramillo-->

@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
    <div class="card-header">
    @lang('app.admin.home.header')
    </div>
    <div class="card-body">
    @lang('app.admin.home.welcomeMessage')
    </div>
</div>
@endsection