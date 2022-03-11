@extends('layouts.layout')
@section('title', 'Index')
@section('content')
<table>
    <tr>
        <th>Student Number</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
@forelse($student as $key => $student)
    <tr>
        <td>
            <p>{{ $key }}</p>
        </td>
        <td>
            <p>{{ $student['lastname']}}</p>
        </td>
        <td>
            <p>{{ $student['birthday']}}</p>
        </td> 
        <td>
            @if($stduent['isnewstudent']==true)
            <p>New Student</p>
            @else
            <p>Old Student</p>
            @endif
        </td>
        <form action="<?php echo $key ?>/destroy" method="POST">
        @csrf
        <input type="hidden" name="name" value= <?php echo $key ?>>
        <input type="submit" name="submit" onclick="return confirm('Are you sure you want to delete <?php echo $key ?>?')" value="Delete">
        </form>
        </td>
        <td>
    </tr>

@empty
    <h1>No Data!</h1>
@endforelse

</table>
@endsection