@extends('admin.layouts.app')
@section('content')
    <div class="inline-block my-4">
        <h3 class="font-medium text-2xl text-blue-600">Contact Mails</h3>
    </div>

    <div class="flex flex-col">
        <div class="-m-3 overflow-x-auto sm:-mx-4 lg:-mx-6">
            <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-6">
                <div class="overflow-hidden ">
                    <table class="mx-auto table-auto shadow rounded-2xl border-b border-gray-200" id="contact-mails-tbl">
                        <thead class="justify-between">
                        <tr class="bg-blue-500">
                            <th class="px-4 py-2">
                                <span class="text-gray-100 font-semibold">Name</span>
                            </th>
                            <th class="px-4 py-2">
                            <span class="text-gray-100 font-semibold">Email</span>
                            </th>
                            <th class="px-4 py-2">
                                <span class="text-gray-100 font-semibold">Subject</span>
                            </th>
                            <th class="px-4 py-2">
                                <span class="text-gray-100 font-semibold">Message</span>
                            </th>
                            <th class="px-4 py-2">
                                <span class="text-gray-100 font-semibold">Date Created</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-200 font-medium">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>

    $(function () {
        let i = 1;
            $('#contact-mails-tbl').DataTable({
                processing: true,
                serverSide: true,
                ajax      : '{!! url('/admin/fetchcontactmails') !!}',
                language: {searchPlaceholder: "Search here  "},
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'subject', name: 'subject'},
                    {data: 'message', name: 'message'},
                    {data: 'created_at', name: 'created_at'}
                ],
                order: [[0, 'desc']]
            });
    });
</script>   
@endsection