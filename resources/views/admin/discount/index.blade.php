@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-4">
                <div class="card">
                    @include('components.alert')
                    <div class="card-header">
                        Add Discount
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 d-flex flex-row-reverse">
                                <a href="{{ route('admin.discount.create') }}" class="btn btn-primary btn-sm">Add Discount</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Percentage</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($discounts as $discount)
                                    <tr>
                                        <td>{{ $discount->name }}</td>
                                        <td>
                                            <span class="badge bg-primary"> {{ $discount->code }}</span>
                                        </td>
                                        <td> {{ $discount->description }}</td>
                                        <td>{{ $discount->percentage }}%</td>
                                        <td>
                                            <a href="{{ route('admin.discount.edit', $discount->id) }}"
                                                class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.discount.destroy', $discount->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete

                                                </button>
                                            </form>

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Discount Created</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
