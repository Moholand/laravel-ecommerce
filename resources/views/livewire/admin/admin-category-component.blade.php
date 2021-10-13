<div>
    <div class="container category-table-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row table-heading">
                            <div class="col-md-6 table-header">
                                دسته‌ها
                            </div>
                            <div class="col-md-6 table-header-button">
                                <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">دسته جدید</a>
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
                                    <th>نام دسته</th>
                                    <th>اسلاگ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td class="admin-category-edit-delete-column">
                                            <a href="{{ route('admin.editcategory', ['category_slug' => $category->slug]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>
                                            <a href="#" wire:click.prevent="deleteCategory({{ $category->id }})">
                                                <i class="fa fa-times fa-2x text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
