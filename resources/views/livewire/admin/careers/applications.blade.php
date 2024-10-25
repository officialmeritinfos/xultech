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
                    <select class="form-select form-select-sm w-auto" wire:model.live="status">
                        <option value="all">All</option>
                        <option value="accepted">Accepted</option>
                        <option value="reviewed">Reviewing</option>
                        <option value="rejected">Rejected</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>
            <div class="latest-transaction-area">
                <div class="table-responsive h-auto" data-simplebar>
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            <th >S/N</th>
                            <th >NAME</th>
                            <th >EMAIL</th>
                            <th>PHONE</th>
                            <th >COVER LETTER</th>
                            <th >RESUME/CV</th>
                            <th >CREATED AT</th>
                            <th>STATUS</th>
                            <th >ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($submissions as $key=>$submission)
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
                                            {{$submission->name}}
                                       </span>
                                </td>
                                <td>
                                       <span class="badge bg-primary" style="word-break: break-word;">
                                            {{$submission->email}}
                                       </span>
                                </td>
                                <td>
                                       <span class="badge bg-primary" style="word-break: break-word;">
                                            {{$submission->phone}}
                                       </span>
                                </td>
                                <td>
                                    <p wire:click.prevent="fetchCoverLetter({{$submission->id}})">
                                        {!! shortenText($submission->cover_letter,5) !!}
                                    </p>
                                </td>
                                <td>
                                    <a href="{{$submission->resume}}" target="_blank" class="default-btn">Resume</a>
                                </td>
                                <td class="status">
                                    {{$submission->created_at->format('d F, Y')}}
                                </td>
                                <td>
                                    @switch($submission->status)
                                        @case('accepted')
                                            <span class="badge bg-success">Accepted</span>
                                            @break
                                        @case('pending')
                                            <span class="badge bg-dark">Pending</span>
                                            @break
                                        @case('reviewed')
                                            <span class="badge bg-primary">Reviewed</span>
                                            @break
                                        @default
                                            <span class="badge bg-danger">Rejected</span>
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
                                                <button class="dropdown-item" wire:click.prevent="review({{$submission->id}})">
                                                    Mark As Reviewing
                                                    <i class="ri-pencil-line"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" wire:click.prevent="reject({{$submission->id}})">
                                                    Mark As Rejected
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" wire:click.prevent="accept({{$submission->id}})">
                                                    Mark As Accepted
                                                    <i class="ri-check-line"></i>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="dropdown-item" wire:click.prevent="deletePost({{$submission->id}})">
                                                    Delete
                                                    <i class="ri-delete-bin-6-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{$submissions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="coverLetter" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title coverLetterTitle" id="staticBackdropLabel">{{$showCoverLetterTitle}}</h5>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body" id="coverLetterContent">
                            <p>
                                {!! nl2br(e($showCoverLetter ?? 'No cover letter provided.')) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('showCoverLetter', (event) => {
            $('#coverLetter').modal('show');
        });
    });

</script>
