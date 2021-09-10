<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo</title>
</head>

<body>
<form action="/" method="post">
@csrf
<label>todo</label><br>
<input type="text" name="content"><br>
<input type="submit" value="送信する">
</form>

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
@section('title','test')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>content</th>
    <th>created_at</th>
    <th></th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->content}}
    </td>
    <td>
      {{$item->created_at}}
    </td>
    <td>
      
    </td>
  </tr>
  @endforeach
</table>
@endsection