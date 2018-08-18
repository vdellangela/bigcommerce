@extends('layouts.app')

@section('title', 'CustomersAdapter')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th># of Orders</th>
            </tr>
        </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td><a href="/customers/{{ $customer->id }}">{{ $customer->first_name." ".$customer->last_name }}</a></td>
                        <td>{{ $customer->ordersCount }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection
