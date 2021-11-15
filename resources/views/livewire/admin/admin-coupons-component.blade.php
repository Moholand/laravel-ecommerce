<div>
    <div class="container category-table-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row table-heading">
                            <div class="col-md-6 table-header">
                                کوپن‌ها
                            </div>
                            <div class="col-md-6 table-header-button">
                                <a href="{{ route('admin.addcoupon') }}" class="btn btn-success pull-right">کوپن جدید</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (session()->has('successMessage'))
                            <div class="alert alert-success success-message" role="alert">
                                {{ session()->get('successMessage') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>کد کوپن</th>
                                    <th>نوع کوپن</th>
                                    <th>مقدار کوپن</th>
                                    <th>مقدار سبد خرید</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->type }}</td>
                                        @if($coupon->type == 'fixed')
                                            <td>$ {{ $coupon->value }}</td>
                                        @else 
                                            <td>{{ $coupon->value }} %</td>
                                        @endif
                                        <td>{{ $coupon->cart_value }}</td>
                                        <td class="admin-category-edit-delete-column">
                                            <a href="{{ route('admin.editcoupon', ['coupon_id' => $coupon->id]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>
                                            <a href="#" onclick="confirm('Are you sure for delete?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{ $coupon->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
