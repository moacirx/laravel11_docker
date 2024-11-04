<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de Usuarios') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="flex flex-col px-10">
            <table class="border-separate border border-slate-400">
                <thead class="">
                    <tr class="text-left">
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // dd($users);
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name ?? ''}}</td>
                            <td>{{$user->email ?? ''}}</td>
                            <td><button>Gravar</button></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
           <div class="pt-4 font-bold text-2xl">
            {{ $users->links() }}
           </div>
        </div>
    </div>
</x-app-layout>
