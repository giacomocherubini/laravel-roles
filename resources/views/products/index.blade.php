@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Tutti gli occhiali</h1>
    <table>
      <thead>
        <th>ID</th>
        <th>Marca</th>
        <th>Description</th>
        <th>Price</th>
      </thead>
      <tbody>
        @forelse ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->marca }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
          </tr>
        @empty

        @endforelse
      </tbody>
    </table>

  </div>

@endsection
