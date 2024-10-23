@extends('dashboards.admin.layouts.base')
@section('content')

    <div class="container-fluid mt-4">
        <div class="ui-kit-cards grid mb-24">
            <h3>{{$pageName}}</h3>

            <div class="latest-transaction-area">
                <div class="table-responsive h-auto" data-simplebar>
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">ACTION</th>
                            <th scope="col">DEVICE</th>
                            <th scope="col">BROWSER</th>
                            <th scope="col">PERFORMED AT</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notifications as $key => $notification)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{$key+1}}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    {{$notification->action}}
                                </td>
                                <td>
                                    {{$notification->device}}
                                </td>
                                <td class="bold">
                                    {{$notification->browser}}
                                </td>
                                <td class="status">
                                   {{date('F d, Y h:is a',strtotime($notification->performed_at))}}
                                </td>
                                <td>
                                    @if($notification->status)
                                        <span class="badge bg-success">Read</span>
                                    @else
                                        <span class="badge bg-dark">Unread</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="{{route('admin.markNotificationAsRead',['id'=>$notification->id])}}">
                                                    Mark As Read
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{$notifications->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
