<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            特徴作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font relative">
                        <form action="{{ route('admin.feature.store')}}" method="post">
                            @csrf
                            <div class="container mx-auto">
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                  <div class="flex flex-wrap -m-2">
                                    <div class="p-2 w-full">
                                      <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">特徴</label>
                                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                      </div>
                                    </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                          <label for="offer_id" class="leading-7 text-sm text-gray-600">求人一覧</label>
                                          <select name="offer_id" id="">
                                            <option value="">選択してください</option>
                                            @foreach ($offers as $offer)
                                            <option value="{{ $offer->id }}">{{ $offer->title }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                          <input type="checkbox" id="caution" name="caution">注意事項に同意
                                        </div>
                                      </div>
                                    <div class="p-2 w-full">
                                      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録する</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </form>
                      </section>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
