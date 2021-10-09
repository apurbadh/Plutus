<div class="card">
    <table class="table card-table table-vcenter">
        <tr>
            <th class="w-1 d-none d-sm-table-cell"></th>
            <th class="sortable" data-sort="name">
                <i class="fa fa-sort mr-2"></i>Name
            </th>
            <th class="sortable d-none d-sm-table-cell" data-sort="code">
                <i class="fa fa-sort mr-2"></i>Code
            </th>
            <th class="sortable d-none d-sm-table-cell" data-sort="capital">
                <i class="fa fa-sort mr-2"></i>Capital
            </th>
            <th class="text-right d-table-cell"></th>
        </tr>
        @forelse($items as $index => $item)
            <tr>
                <td class="w-1 d-none d-sm-table-cell">
                    {{ $item->flag }}
                </td>
                <td>
                    <div>{{ $item->name ?: 'N/A' }}</div>
                </td>
                <td class="d-none d-sm-table-cell">
                    <span class="badge badge badge-default">
                        {{ $item->code ?: 'N/A' }}
                    </span>
                </td>
                <td class="d-none d-sm-table-cell">
                    <div class="text-muted">{{ $item->capital ?: 'N/A' }}</div>
                </td>
                <td class="text-right d-table-cell">
                    @permission('countries-edit')
                        @include('varbox::buttons.edit', ['url' => route('admin.countries.edit', $item->getKey())])
                    @endpermission
                    @permission('countries-delete')
                        @include('varbox::buttons.delete', ['url' => route('admin.countries.destroy', $item->getKey())])
                    @endpermission
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10">No records found</td>
            </tr>
        @endforelse
    </table>
</div>
