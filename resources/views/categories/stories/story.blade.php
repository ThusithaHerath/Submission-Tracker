@extends('layouts.app')
@section('content')
    <div class="section-title">
        <h2>Category</h2>
        <p style="letter-spacing: 1px">Stories</p>
    </div>
    <div class="p-3" style="background-color: rgba(250, 235, 215, 0.363)">

        @if (session('story_added'))
            <h5 class="alert alert-success">{{ session('story_added') }}</h5>
        @endif
        @if (session('story_exists'))
            <h5 class="alert alert-warning">{{ session('story_exists') }}</h5>
        @endif

        <div class="container p-0" data-aos="fade-up">


            <div class="table-responsive overflow-hidden">

                <table class="table table-striped custom-table" id="custom-table">
                    <thead>
                        <tr>
                            <th scope="col"class="pb-3 text-center px-3">
                                <span>Delete</span>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Submitted ?</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Story</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Status</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Type</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Lines</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Words</span>
                                </div>
                            </th>
                            <th scope="col" class="p-0">
                                <div class="d-flex justify-content-between ">
                                    <span class="p-3">Summary</span>
                                </div>
                            </th>
                            <th scope="col"class="pb-3 pe-3"> <span>Action</span></th>
                        </tr>
                    </thead>
                    @foreach ($story as $story)
                        <tr scope="row " class="fs-6">
                            <td class="text-center data-1">
                                <a class="fa fa-trash" href="{{ url('api/story/delete/' . $story->Story_ID) }}"></a>
                                <input type="text" value="{{ $story->Story_ID }}" class="data-id" hidden>

                            </td>

                            <td class="data-2">N/A</td>
                            <td class="data-story">{{ $story->Story_Name }}</td>
                            <td class="data-3">{{$story->storyStatus->StoryCompletionStatus_Name}}</td>
                            <td class="data-4">{{$story->storyType->StoryType_Name}}</td>
                            <td class="data-lines">{{ $story->Lines }}</td>
                            <td class="data-words">{{ $story->Words }}</td>
                            <td class="data-summary">{{ $story->Summary }}</td>
                            <td class="text-center editBtnStory data-7" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"> <i class="fa fa-pencil"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            </tbody>
            </table>

        </div>
    </div>
    </section>

    @include('modal.Story')
@endsection
@include('modal.Story', ['story_status' => $story_status, 'story_type' => $story_type, 'story' => $story])
@include('modal.editStory', [
    'story_status' => $story_status,
    'story_type' => $story_type,
    'story' => $story,
])
