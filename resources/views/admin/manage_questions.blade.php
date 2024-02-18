@extends('layouts.adminlayout')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h2 class="text-warning mt-5">ALL QUESITONS</h2>
    </div>
    
    {{-- drop down --}}
    <div class="mt-5 col-md-6 d-flex justify-content-end">

        <a href="{{route('admin.addquestion')}}"><button type="button" class="btn btn-primary" data-mdb-ripple-init>Add question</button></a>

        <button type="button" class="btn btn-warning dropdown-toggle mx-3" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
          Choose categories
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{route('admin.showPhpQuestions')}}">PHP</a></li>
          <li><a class="dropdown-item" href="#">SCIENCE</a></li>
        </ul>
    </div>  
  </div>
</div>


  <table class="table align-middle">
    <thead class="bg-primary">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Questions</th>
        <th scope="col">Answers</th>
        <th scope="col">Categorys</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($questions as $question)
      <tr>
        <th scope="row">{{$question->id}}</th>
        <td>{{$question->question}}</td>
        <td>{{$question->answer}}</td>
        <td>{{$question->category}}</td>
        <td><a href="{{route('admin.editquestion', $question->id)}}"><button type="button" class="btn btn-primary" data-mdb-ripple-init>Edit</button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

 
  
@endsection