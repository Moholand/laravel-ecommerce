<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 table-header-button" >
                                <a href="{{ route('admin.homeslider') }}" class="btn btn-success">همه اسلایدها</a>
                            </div>
                            <div class="col-md-6 table-header">
                                اسلاید جدید
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(session()->has('successMessage'))
                        <div class="alert alert-success success-message" role="alert">
                            {{ session()->get('successMessage') }}
                        </div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="addSlide">
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="text" placeholder="عنوان" class="form-control input-md" wire:model="title">
                                </div>
                                <label for="" class="col-md-4 control-label">عنوان</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="text" placeholder="زیرنویس" class="form-control input-md" wire:model="subtitle">
                                </div>
                                <label for="" class="col-md-4 control-label">زیرنویس</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="text" placeholder="قیمت" class="form-control input-md" wire:model="price">
                                </div>
                                <label for="" class="col-md-4 control-label">قیمت</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="text" placeholder="لینک" class="form-control input-md" wire:model="link">
                                </div>
                                <label for="" class="col-md-4 control-label">لینک</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image">
                                    @if($image)
                                        <img src="{{ $image->temporaryURL() }}" width="120" class="mt-3">
                                    @endif
                                </div>
                                <label for="" class="col-md-4 control-label">تصویر</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="0">غیر فعال</option>
                                        <option value="1">فعال</option>
                                    </select>
                                </div>
                                <label for="" class="col-md-4 control-label">وضعیت</label>
                            </div>

                            <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">ذخیره</button>
                                </div>
                                <label for="" class="col-md-4 control-label"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
