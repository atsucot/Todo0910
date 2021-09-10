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
<label>Todo List</label><br>
<input type="text" name="content">
<input type="submit" value="追加">
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
@section('title','')

@section('content')
<table>
  <tr>
    <th>タスク名</th>
    <th>作成日</th>
    <th>削除</th>
    <th>更新</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    
      
    
    <td>
      {{$item->content}}
    </td>
    <td>
      {{$item->created_at}}
    </td>
    
    <td> 
      <form action="/" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="削除">
        
           
    
    </form>

      
    </td>
  </tr>
  @endforeach
</table>
@endsection