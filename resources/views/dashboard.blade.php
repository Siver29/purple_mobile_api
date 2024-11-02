
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <div class="container mt-5">
                        <h1 class="text-center mb-4">Upload Image</h1>
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="food">طعام</option>
                                    <option value="spices">توابل ومكسرات</option>
                                    <option value="billboards">لوحات إعلانية</option>
                                    <option value="chemicals">مواد كيميائية ومنظفات</option>
                                    <option value="industrial_and_electrical">مواد صناعية  وكهربائية</option>
                                    <option value="cosmetics">أدوية ومستحضرات تجميل</option>
                                    <option value="frozen_food">الاطعمة المجمدة</option>
                                    <option value="dairy_products">منتجات الالبان</option>
                                    <option value="stands">ستاندات و أجنحة المعارض</option>
                                    <option value="car">إعلانات السيارات</option>
                                    <option value="FMCG">سلع استهلاكية</option>
                                    <option value="chips">شيبس</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
