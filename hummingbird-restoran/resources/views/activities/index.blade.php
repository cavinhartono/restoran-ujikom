@extends('layouts.dashboard')

@push('title')
Log Activity
@endpush

@section('content')
<x-navigation />
<div class="content">
  <h1>Log Activity Lists</h1>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Subject</th>
      <th>URL</th>
      <th>Method</th>
      <th width="300px">User Agent</th>
      <th>User Id</th>
      <th>Action</th>
    </tr>
    @forelse($logs as $log)
    <tr>
      <td>{{ $loop->iteration() }}</td>
      <td>{{ $log->subject }}</td>
      <td class="subtitle success">{{ $log->url }}</td>
      <td>{{ $log->method }}</td>
      <td>{{ $log->agent }}</td>
      <td>{{ $log->user_id }}</td>
      <td><button class="btn secondary">Delete</button></td>
    </tr>
    @empty
    <tr>
      <td>Nothing...</td>
    </tr>
    @endforelse
  </table>
</div>
@endsection