@extends('layouts.adminlayout')
@section('content')
    <h2>Edit questions</h2>

    <form class="mt-5" action="{{route('admin.postEditQuestion', $edit_question->id)}}" method="POST">
        @csrf
          <!-- Text input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" name="question" value="{{$edit_question->question}}" />
            <label class="form-label" for="form6Example4">Question</label>
          </div>
          @error('question')
                     <p class="text-danger">{{$message}}</p>
          @enderror
        
          <!-- Message input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <textarea class="form-control" id="form6Example7" rows="4" name="answer">{{$edit_question->answer}}</textarea>
            <label class="form-label" for="form6Example7">Answers</label>
          </div>
          @error('answer')
                     <p class="text-danger">{{$message}}</p>
          @enderror
      
          <label for="">Choose category</label>
                <select name="category" id="" class="form-control">
                  <option value="PHP" {{$edit_question->category=='PHP' ? "selected" : ""}}>PHP</option>
                  <option value="SCIENCE" {{$edit_question->category=='SCIENCE' ? "selected" : ""}}>SCIENCE</option>
                </select>
        
          <!-- Submit button -->
          <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4 mt-5">save</button>
        </form>
@endsection
