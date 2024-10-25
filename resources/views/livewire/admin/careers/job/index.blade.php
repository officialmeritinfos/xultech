<div>
    <div class="container-fluid">
        <div class="ui-kit-cards grid mb-24">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <div class="icon-field">
                        <input type="text" class="form-control form-control-sm w-auto"
                               placeholder="Search by anything" wire:model.live.debounce.250ms="search">
                        <span class="icon">
                        <iconify-icon icon="ion:search-outline"></iconify-icon>
                    </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="{{ route('admin.job.new') }}" class="btn btn-sm btn-outline-primary"><i
                            class="ri-add-line"></i>
                        Add Vacancy
                    </a>
                </div>
            </div>
            <div class="latest-transaction-area">
                <div class="table-responsive h-auto" data-simplebar>
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            <th >S/N</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>SALARY RANGE</th>
                            <th>DEPARTMENT</th>
                            <th>EXPERIENCE LEVEL</th>
                            <th>LOCATION</th>
                            <th>EMPLOYMENT TYPE</th>
                            <th>APPLICATIONS</th>
                            <th >CREATED AT</th>
                            <th>STATUS</th>
                            <th >ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $key=>$job)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            {{$key+1}}
                                        </label>
                                    </div>
                                </td>
                                <td>
                                       <span class="badge bg-primary" style="word-break: break-word;">
                                            {{$job->title}}
                                       </span>
                                </td>
                                <td>
                                    <p>
                                        {!! shortenText($job->description,5) !!}
                                    </p>
                                </td>
                                <td>
                                    {{$job->salary_range}}
                                </td>
                                <td class="bold">
                                    {{$job->department}}
                                </td>
                                <td style="word-break: break-word;">
                                    {{$job->experience_level}}
                                </td>
                                <td style="word-break: break-word;">
                                    {{$job->location}}
                                </td>
                                <td style="word-break: break-word;">
                                    {{$job->employment_type}}
                                </td>
                                <td>
                                    {{$job->jobSubmissions->count()}}
                                </td>
                                <td class="status">
                                    {{$job->created_at->format('d F, Y')}}
                                </td>
                                <td>
                                    @switch($job->is_active)
                                        @case(true)
                                            <span class="badge bg-success">Active</span>
                                            @break
                                        @default
                                            <span class="badge bg-primary">Inactive</span>
                                            @break
                                    @endswitch
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="{{route('admin.applications.index',['job'=>$job->id])}}">
                                                    Submissions
                                                    <i class="ri-file-2-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{route('admin.job.edit',['id'=>$job->id])}}">
                                                    Edit
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" wire:click.prevent="deleteJob({{$job->id}})">
                                                    Delete
                                                    <i class="ri-delete-bin-6-line"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$jobs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

