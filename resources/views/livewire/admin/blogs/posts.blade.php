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
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                        <option value="archived">Archived</option>
                    </select>
                    <a href="{{ route('admin.blog.new') }}" class="btn btn-sm btn-outline-primary"><i
                            class="ri-add-line"></i>
                        Add Post
                    </a>
                </div>
            </div>
            <div class="latest-transaction-area">
                <div class="table-responsive h-auto" data-simplebar>
                    <table class="table align-middle mb-0">
                        <thead>
                        <tr>
                            <th >S/N</th>
                            <th >TITLE</th>
                            <th >CONTENT</th>
                            <th>FEATURED IMAGE</th>
                            <th >CATEGORY</th>
                            <th >CREATED AT</th>
                            <th >CREATED BY</th>
                            <th>STATUS</th>
                            <th >ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key=>$post)
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
                                            {{$post->title}}
                                       </span>
                                </td>
                                <td>
                                    <p>
                                        {!! shortenText($post->content,5) !!}
                                    </p>
                                </td>
                                <td>
                                    <img src="{{$post->featuredImage}}" alt="Images" style="width: 50px;">
                                </td>
                                <td class="bold">
                                    {{$post->category}}
                                </td>
                                <td class="status">
                                    {{$post->created_at->format('d F, Y')}}
                                </td>
                                <td style="word-break: break-word;">
                                    {{$post->user->name}}
                                </td>
                                <td>
                                    @switch($post->status)
                                        @case('published')
                                            <span class="badge bg-success">Published</span>
                                            @break
                                        @case('draft')
                                            <span class="badge bg-dark">Draft</span>
                                            @break
                                        @default
                                            <span class="badge bg-primary">Archived</span>
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
                                                <a class="dropdown-item" href="{{route('admin.blog.edit',['id'=>$post->id])}}">
                                                    Edit
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" wire:click.prevent="deletePost({{$post->id}})">
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
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

