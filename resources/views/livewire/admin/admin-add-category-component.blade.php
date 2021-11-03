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
                                <a href="{{ route('admin.categories') }}" class="btn btn-success pull-left">تمام دسته‌ها</a>
                            </div>
                            <div class="col-md-6 table-header">
                                افزودن دسته جدید
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" placeholder="نام دسته" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                                    @error('name') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">نام دسته</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" placeholder="اسلاگ دسته" class="form-control input-md" wire:model="slug">
                                    @error('slug') <p class="text-danger">{{ $message }}</p>  @enderror
                                </div>
                                <label class="col-md-4 control-label">اسلاگ دسته</label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">افزودن دسته</button>
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
