@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{route('categories.create')}}" class="btn btn-secondary btn-lg">{{__('actions.add_category')}}</a>
        </div>


        <div class="card card-default">
            <div class="card-header">{{__('actions.Categories')}}</div>

            @if($categories->count())
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>Name</th>
                        <th>Created  at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <p>{{$category->title}}</p>
                                </td>
                                <td>{{$category->created_at->diffForHumans()}}<br>{{$category->created_at}}</td>

                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">  <i class="fa fa-edit "></i></a>
                                </td>
                                <td>
                                    <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button  onclick="return confirm('Sind Sie dir sicher ? 😨')"  class="btn btn-danger" type="submit"><i class="fa fa-trash "></i></button>
                                    </form>
                            </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    {!! $categories->links() !!}
                </div>
               



            @else
                <div class="lead text-center">
                    <p>There are no categories</p>
                </div>
            @endif
        </div>
        </div>
        <a href="{{route('home')}}" class="btn btn-outline-dark mt-4">{{__('actions.back')}}</a>
    </div>
@endsection
