<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('admin.products') }}" class="btn btn-success btn-sm" style="font-weight: 600">همه‌ی محصولات</a>
                            </div>
                            <div class="col-md-6" style="text-align: right; font-size: 16px;">
                                افزودن محصول
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="text-align: center">
                        @if(session()->has('successMessage'))
                        <div class="alert alert-success success-message" role="alert">
                            {{ session()->get('successMessage') }}
                        </div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="text" placeholder="نام محصول" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                </div>
                                <label for="" class="col-md-4 form-label">نام محصول</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="text" placeholder="اسلاگ محصول" class="form-control input-md" wire:model="slug">
                                </div>
                                <label for="" class="col-md-4 form-label">اسلاگ محصول</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="توضیح مختصر" cols="30" rows="10" wire:model="short_description"></textarea>
                                </div>
                                <label for="" class="col-md-4 form-label">توضیح مختصر</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px"> 
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="توضیحات" cols="30" rows="10" wire:model="description"></textarea>
                                </div>
                                <label for="" class="col-md-4 form-label">توضیحات</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="text" placeholder="قیمت" class="form-control input-md" wire:model="regular_price">
                                </div>
                                <label for="" class="col-md-4 form-label">قیمت</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="text" placeholder="قیمت در تخفیف" class="form-control input-md" wire:model="sale_price">
                                </div>
                                <label for="" class="col-md-4 form-label">قیمت در تخفیف</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                                </div>
                                <label for="" class="col-md-4 form-label">SKU</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <Select class="form-control" wire:model="stock_status">
                                        <option value="instock">موجود</option>
                                        <option value="outofstock">ناموجود</option>
                                    </Select>
                                </div>
                                <label for="" class="col-md-4 form-label">موجودی</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <Select class="form-control" wire:model="featured">
                                        <option value="1">هست</option>
                                        <option value="0">نیست</option>
                                    </Select>
                                </div>
                                <label for="" class="col-md-4 form-label">محصول ویژه</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="text" placeholder="تعداد" class="form-control input-md" wire:model="quantity">
                                </div>
                                <label for="" class="col-md-4 form-label">تعداد</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{ $image->temporaryURL() }}" width="120">
                                    @endif
                                </div>
                                <label for="" class="col-md-4 form-label">تصویر محصول</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <Select class="form-control" wire:model="category_id">
                                        <option value="">انتخاب دسته</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </Select>
                                </div>
                                <label for="" class="col-md-4 form-label">دسته</label>
                            </div>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">ایجاد محصول</button>
                                </div>
                                <label for="" class="col-md-4 form-label"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
