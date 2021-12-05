@extends('layouts.app')
@section('content')


<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Position</th>
            <th scope="col">Salary</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employees)
                <tr>
                    <td>{{ $employees->lname }}</td>
                    <td>{{ $employees->fname }}</td>
                    <td>{{ $employees->position }}</td>
                    <td>{{ $employees->salary }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
