@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>idnumber</th>
    <th>when</th>
    <th>startwork</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>{{$Management->idnumber}}</td>
    <td>{{$Management->when}}</td>
    <td>{{$Management->startwork}}</td>
  </tr>
  @endforeach
</table>
@endsection