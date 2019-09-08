

@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
                        <table class="table">
                           <tbody>

                               <tr>
                                   <td><b>Chosen Product</b></td>
                               <td>{{ $product->name }}</td>
                               </tr>

                               <tr>
                                    <td><b>Product Price</b></td>
                                <td>{{ $product->price }}</td>
                                </tr>

                                <tr>
                                        <td><b>Voucher Code</b></td>
                                    <td>{{ $voucher->code }}</td>
                                    </tr>
                           </tbody>
                            </table>
                   
                </div>
            </div>
        </div>
    </div>
@endsection