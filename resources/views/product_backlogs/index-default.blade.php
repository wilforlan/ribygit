@section('title',  trans('Product Backlogs'))

@extends('layouts.master')

@section('breadcrumb')
<div class="col-lg-6">
    <h3>{{trans('Product Backlog List')}}</h3>
</div>
<div class="col-lg-6 text-right">
    <a href="{{route('product_backlogs.create')}}" class="btn btn-sm btn-primary"
        data-toggle="modal" data-target="#modalLarge">{{trans('Create Product Backlog')}}</a>
</div>
@endsection

@section('content')
<div class="col-lg-12">
    @include('partials.boxes.product-backlog', [ 'list' => $backlogs->sortByDesc('favorite') ])
</div>

{{$backlogs->setPath('')->links()}}

@endsection
