{{-- Ramadhan abdul aziz 6706223026 46-04 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Info Koleksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('koleksi.updateKoleksi') }}">
                        <input type="hidden" name="id" value="{{ $collection->id }}" id="">
                        @csrf
                        <table class="border-collapse table-fixed w-full text-md">
                            <tr>

                                <th
                                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    Nama Koleksi</th>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    {{ $collection->namaKoleksi }}
                                </td>
                            </tr>
                            <tr>
                                <th
                                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    Jenis Koleksi</th>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    @if ($collection->jenisKoleksi == 1)
                                        <span>Buku</span>
                                    @elseif($collection->jenisKoleksi == 2)
                                        <span>Majalah</span>
                                    @else
                                        <span>Cakram Digital</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th
                                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    Jumlah Koleksi</th>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    <!-- Jumlah Kolkesi -->
                                    {{ $collection->jumlahKoleksi }}
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-end pt-6 pr-9">
                            <x-primary-button class="ml-4">
                                {{ __('Update Collection') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
