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
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'add.blade.php')

@section('content')
<form action="/add" method="post">
  <table>
  @csrf
    <tr>
      <th>idnumber</th>
      <td><input type="text" name="idnumber"></td>
    </tr>
    <tr>
      <th>when</th>
      <td><input type="text" name="when"></td>
    </tr>
    <tr>
      <th>startwork</th>
      <td><input type="text" name="startwork"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
@endsection