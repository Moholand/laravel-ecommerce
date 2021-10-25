<div>
    <div class="container product-table-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.addproduct') }}" style="font-weight: 600" class="btn btn-success btn-sm">
                                    محصول جدید
                                </a>
                            </div>
                            <div class="col-md-6" style="text-align: right; font-size: 16px">
                                تمام محصولات
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(session()->has('successMessage'))
                        <div class="alert alert-success success-message" role="alert">
                            {{ session()->get('successMessage') }}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>تصویر</th>
                                    <th>نام محصول</th>
                                    <th>موجودی</th>
                                    <th>قیمت</th>
                                    <th>دسته</th>
                                    <th>تاریخ ایجاد</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" width="60" /></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->stock_status }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct', ['product_slug' => $product->slug]) }}">
                                                <i class="fa fa-edit fa-2x text-info"></i>
                                            </a>
                                            <a href="#" style="margin-right: 10px" wire:click.prevent="deleteProduct({{ $product->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
