@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'Dailylog.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($Dailylogs as $Dailylog)
  <tr>
    <td>
      {{$Dailylog->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
{{ $Dailylogs->links() }}
@endsection