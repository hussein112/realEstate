<x-admin-layout>
    <x-slot name="main">
        <main class="branches-admin container">
            <x-page-title title="branches"></x-page-title>
            <hr>
            <div class="container my-5">
                    <table class="table table-bordered caption-top">
                        <caption>List of All Branches</caption>
                        <thead class="bg-dark">
                        <tr>
                            <th scope="col" class="text-primary">
                                ID
                            </th>
                            <th scope="col" class="text-primary">
                                Phone
                            </th>
                            <th scope="col" class="text-primary">
                                Email
                            </th>
                            <th scope="col" class="text-primary">
                                Location
                            </th>
                            <th scope="col" class="text-primary">
                                Working Hours
                            </th>
                            <th scope="col" class="text-primary">
                                From
                            </th>
                            <th scope="col" class="text-primary">
                                To
                            </th>
                            <th scope="col" class="text-primary">
                                Request a New Branch From Developer
                            </th>
                        </tr>
                        </thead>
                        @isset($branches)
                            <tbody>
                            @foreach($branches as $branch)
                                <tr>
                                    <th scope="row">{{ $branch->id }}</th>
                                    <td>{{ $branch->phone }}</td>
                                    <td>{{ $branch->email }}</td>
                                    <td>{{ $branch->location }}</td>
                                    <td>{{ $branch->working_hours }}</td>
                                    <td>{{ $branch->from_hour }} AM</td>
                                    <td>{{ $branch->to_hour }} PM</td>
                                    <td><a href="mailto:husseinkhalil420@gmail.com?subject=New Branch -- Company ABC Website" title="">webdeveloper@gmail.com</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endisset
                    </table>
                </div>

        </main>
    </x-slot>
</x-admin-layout>
