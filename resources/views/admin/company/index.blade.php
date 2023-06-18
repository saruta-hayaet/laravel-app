<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            企業
        </h2>
    </x-slot>


 <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="" class="text-blue-500">新規登録</a>
                <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                      <thead>
                        <tr>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Id</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                        </tr>
                      </thead>
                      @foreach ($companies as $company)
                      <tbody>
                        <tr>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{ $company->id }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{ $company->name }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">{{ $company->email }}</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900"><a class='text-blue-500' href="{{ route('admin.company.show', ['id' => $company->id]) }}">詳細</a></td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-admin-layout>
