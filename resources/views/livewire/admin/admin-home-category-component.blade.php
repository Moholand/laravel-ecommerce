<div>
    <style>
        .form-group {
            display: flex; 
            justify-content: center; 
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading table-header">
                        مدیریت دسته‌های صفحه اصلی
                    </div>
                    <div class="panel-body">
                        @if (session()->has('successMessage'))
                            <div class="alert alert-success success-message" role="alert">
                                {{ session()->get('successMessage') }}
                            </div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateHomeCategory">
                            <div class="form-group">
                                <div class="col-md-4" wire:ignore>
                                    <select class="sel-categories form-control" name="categories[]" multiple="multiple" wire:model="selected_categories"> 
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-md-4 control-label">انتخاب دسته‌ها</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="numberofproducts">
                                </div>
                                <label class="col-md-4 control-label">تعداد محصولات</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success">ذخیره</button>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.sel-categories').select2();
            $('.sel-categories').on('change', function(e) {
                var data = $('.sel-categories').select2('val');
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush
