@extends('dashboards.admin.layouts.base')
@section('content')

    <livewire:admin.blogs.edit-post :post="$post"/>

    @push('js')

        <script src="{{asset('dashboard/js/selectize.min.js')}}"></script>
    @endpush

@endsection
