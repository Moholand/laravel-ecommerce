<div>
    <style>
        .form-group {
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
    <div class="container admin-add-category-wrapper">
        <div class="row">
            @if(Session::has('successMessage'))
            <div class="alert alert-success success-message" role="alert">
                {{ Session::get('successMessage') }}
            </div>
            @endif
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.coupons') }}" class="btn btn-success pull-left">تمام کوپن‌ها</a>
                            </div>
                            <div class="col-md-6 table-header">
                                ویرایش کوپن
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="updateCoupon">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" placeholder="کد کوپن" class="form-control input-md" wire:model="code">
                                    @error('code') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">کد کوپن</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="type">
                                        <option value="">انتخاب نوع</option>
                                        <option value="fixed">ثابت</option>
                                        <option value="percent">درصد</option>
                                    </select>
                                    @error('type') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">نوع کوپن</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" placeholder="مقدار کوپن" class="form-control input-md" wire:model="value">
                                    @error('value') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">مقدار کوپن</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" placeholder="مقدار خرید" class="form-control input-md" wire:model="cart_value">
                                    @error('cart_value') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">مقدار خرید</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
                                </div>
                                <label class="col-md-4 control-label"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
