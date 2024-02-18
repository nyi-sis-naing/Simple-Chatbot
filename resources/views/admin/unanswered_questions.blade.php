@extends('layouts.adminlayout')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-warning mt-5">UNANSWERED QUESTIONS</h2>
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
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td><a href=""><button type="button" class="btn btn-primary" data-mdb-ripple-init>Edit</button></a></td>
      </tr>
    </tbody>
  </table>


@endsection