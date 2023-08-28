@extends('layout.main')
@section('content')
    <h1 class="text-center">main page</h1>
    <!-- resources/views/customer/edit.blade.php -->
    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" value="{{ $customer->customer_name }}" required>

        <!-- Tambahkan input lainnya sesuai kebutuhan -->

        <button type="submit">Update Customer</button>
    </form>
@endsection
