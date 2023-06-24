@extends('layouts.app')
@section('content')
    <div class="p-3" style="background-color: rgba(250, 235, 215, 0.363)">

        @if(session('story_added'))
        <h5 class="alert alert-success">{{session('story_added')}}</h5>
        @endif
        @if(session('story_exists'))
        <h5 class="alert alert-warning">{{session('story_exists')}}</h5>
        @endif

        <div class="container p-0" data-aos="fade-up">

            <button type="button" class="btn btn-info mb-3"  data-bs-toggle="modal" data-bs-target="#story" >Add New Story</button>
            
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
                            <td class="text-center data-1 delete-row"> <i class="fa fa-trash"></i></td>
                            <td class="data-2">N/A</td>
                            <td class="data-3">{{$story->Story_Name}}</td>
                            <td class="data-3">{{$story->Story_Name}}</td>
                            <td class="data-3">{{$story->Story_Name}}</td>
                            {{-- <td class="data-3">{{$story->sstatus->StoryCompletionStatus_ID}}</td>
                            <td class="data-4">{{$story->sstype->StoryType_Name}}</td> --}}
                            <td class="data-5">{{$story->Lines}}</td>
                            <td class="data-6">{{$story->Words}}</td>
                            <td class="data-6">{{$story->Summary}}</td>
                            <td class="text-center editBtn data-7" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                    class="fa fa-pencil"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>

@endsection
