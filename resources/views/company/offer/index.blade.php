<x-company-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             求人一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('company.offer.create')}}" class="text-blue-500">新規登録</a>
                    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Id</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">タイトル</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">会社名</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">応募内容</th>
                            </tr>
                          </thead>
                          @foreach ($offers as $offer)
                          <tbody>
                            <tr>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $offer->id}}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $offer->title}}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $name }}</td>
                              <td class="border-t-2 border-gray-200 px-4 py-3">{{ $offer->content}}</td>
                            </tr>
                          </tbody>
                          @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-company-layout>
