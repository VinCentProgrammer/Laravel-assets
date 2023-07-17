@extends('layouts.shop')

@section('title', 'SHOW CART')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Giỏ hàng</h1>
                <p>Hiện tại có {{ Cart::count() }} sản phẩm trong giỏ hàng</p>
                @if (Cart::count() > 0)
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col">Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $cnt = 0;
                                @endphp
                                @foreach (Cart::content() as $product)
                                    @php
                                        $cnt++;
                                    @endphp
                                    <tr>
                                        <td scope="row">{{ $cnt }}</td>
                                        <td>
                                            <img src="{{ asset($product->options->thumbnail) }}" width="100px"
                                                alt="">
                                        </td>
                                        <td scope="col"><a href="">{{ $product->name }}</a></td>
                                        <td scope="col">{{ number_format($product->price, 0, ',', '.') }}đ</td>
                                        <td scope="col">
                                            <input type="number" style="width:50px; text-align: center"
                                                value="{{ $product->qty }}" min="1"
                                                name="qty[{{ $product->rowId }}]">
                                        </td>
                                        <td scope="col">{{ number_format($product->total, 0, ',', '.') }}đ</td>
                                        <td><a href="{{ route('cart.remove', $product->rowId) }}"
                                                class="text-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan='6' class="text-right">Tổng:</td>
                                    <td><strong>{{ Cart::total() }}đ</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="submit" value="Cập nhật giỏ hàng" name="btn_update" class="btn btn-primary">
                        <a href="{{ route('cart.destroy') }}" class="btn btn-danger">Xóa toàn bộ giỏ hàng</a>
                    </form>
                @endif
            </div>
        </div>
    </div>

@endsection
