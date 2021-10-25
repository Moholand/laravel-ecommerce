<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 table-header-button">
                                <a href="{{ route('admin.addhomeslider') }}" class="btn btn-success">اسلاید جدید</a>
                            </div>
                            <div class="col-md-6 table-header">
                                اسلاید‌ها
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(session()->has('successMessage'))
                        <div class="alert alert-success success-message" role="alert">
                            {{ session()->get('successMessage') }}
                        </div>
                        @endif
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>شناسه</th>
                                    <th>تصویر</th>
                                    <th>عنوان</th>
                                    <th>زیرنویس</th>
                                    <th>قیمت</th>
                                    <th>لینک</th>
                                    <th>وضعیت</th>
                                    <th>تاریخ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td><img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" width="120"></td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->subtitle }}</td>
                                        <td>{{ $slider->price }}</td>
                                        <td>{{ $slider->link }}</td>
                                        <td>{{ $slider->status == 1 ? 'موجود' : 'ناموجود' }}</td>
                                        <td>{{ $slider->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.edithomeslider', ['slide_id' => $slider->id]) }}">
                                                <i class="fa fa-edit fa-2x text-info"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" wire:click.prevent="deleteSlide({{ $slider->id }})">
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
