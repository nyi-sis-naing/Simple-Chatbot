@extends('layouts.adminlayout')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-warning mt-5">REVIEW MESSAGES</h2>
      </div>  
    </div>
</div>
<table class="table align-middle">
    <thead class="bg-primary">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Review messages</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td><a href=""><button type="button" class="btn btn-danger" data-mdb-ripple-init>Delete</button></a></td>
      </tr>
    </tbody>
  </table>
@endsection