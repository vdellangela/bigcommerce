@extends('layouts.app')

@section('title', $customer->first_name . "'s Order History")

@section('content')
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th># of Products</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->date_created }}</td>
                    <td>{{ $order->items_total }}</td>
                    <td>{{ $order->total_tax }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">This client doesn't have any order</td>
                </tr>
            @endforelse
            <tr>
                <td colspan="2">Lifetime Value</td>
                <td>${{ $lifeTimeValue }}</td>
            </tr>
        </tbody>
    </table>
@endsection
