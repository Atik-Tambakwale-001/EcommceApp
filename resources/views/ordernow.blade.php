@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>

                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{($total+10)}}</td>
                </tr>
            </tbody>
        </table>
        <div class="">
            <p>The form below contains three inline radio buttons:</p>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="payment" value="cash" checked>Online Payment
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="payment" value="cash">EMI Payment
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="payment" value="cash">Cash on Delivery
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Placed Order Now</button>
            </form>
        </div>
    </div>

</div>
@endsection
