@if(isset($uploads) && $uploads->count())
    <table class="js-UploadFilesTable table card-table table-vcenter table-md table-borderless table-hover">
        @foreach($uploads as $upload)
            <tr>
                <td class="w-1 pl-2">
                    <i class="fa fa-file-video text-blue" style="vertical-align: middle; font-size: 220%;"></i>
                </td>
                <td>
                    <div class="upload-name text-truncate">{{ $upload->original_name ?: 'N/A' }}</div>
                    <div class="small text-muted">{{ $upload->size_mb ?: 0 }} MB</div>
                </td>
                <td class="text-right pr-0">
                    <a href="{{ $upload->helper->url() }}" target="_blank" class="d-inline btn mr-2 text-yellow">
                        <i class="fe fe-video text-yellow mr-2"></i>Watch
                    </a>
                    <button class="js-UploadSelectBtn no-background d-inline btn text-green" data-path="{{ $upload->full_path }}">
                        <i class="fe fe-check-square text-green mr-2"></i>Choose
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
@else
    <p class="px-2 text-muted-dark">No videos found</p>
@endif
