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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: right; font-size: 16px">
                    تنظیمات تخفیف
                </div>
                <div class="panel-body">
                    @if (session()->has('successMessage'))
                        <div class="alert alert-success success-message" role="alert">
                            {{ session()->get('successMessage') }}
                        </div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="updateSale">
                        <div class="form-group">
                            <div class="col-md-4">
                                <select class="form-control" wire:model="status">
                                    <option value="0">غیرفعال</option>
                                    <option value="1">فعال</option>
                                </select>
                            </div>
                            <label for="" class="col-md-4 control-label">وضعیت</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="text" id="sale-date" placeholder="YYYY/MM/DD H:M:S" class="form-control input-md" wire:model="sale_date">
                            </div>
                            <label for="" class="col-md-4 control-label">تاریخ تخفیف</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
                            </div>
                            <label for="" class="col-md-4 control-label"></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $('#sale-date').datetimepicker({
                format: 'Y-MM-DD h:m:s'
            })
            .on('db.change', function(ev) {
                var data = $('#sale-date').val();
                console.log(data);
                @this.set('sale_date', data);
            });
        });
    </script>
@endpush