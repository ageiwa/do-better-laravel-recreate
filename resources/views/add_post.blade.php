@extends('base')

@section('title', 'Создать заявку');

@section('content')
<form>
    <input type="text" name="title" placeholder="Название">
    <input type="text" name="desc" placeholder="Описание">
    <select name="category">
        <option>Option A</option>
    </select>
    <input type="submit" value="Создать">
</form>
@endsection