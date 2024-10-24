@extends('dashboards.admin.layouts.base')
@section('content')

    <livewire:admin.blogs.new-post />

    @push('js')

        <script src="{{asset('dashboard/js/selectize.min.js')}}"></script>
    @endpush

@endsection
