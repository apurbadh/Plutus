@include('varbox::validation')

@if($item->exists)
    {!! form_admin()->model($item, ['url' => $url, 'method' => 'put', 'class' => 'frm row row-cards', 'files' => true]) !!}
@else
    {!! form_admin()->open(['url' => $url, 'method' => 'post', 'class' => 'frm row row-cards', 'files' => true]) !!}
@endif
<div class="col-md-12">
    <div class="card">
        <div class="card-status bg-blue"></div>
        <div class="card-header">
            <h3 class="card-title">Basic Info</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-warning col-12 mb-5">
                <div class="d-inline-block float-left text-left mx-auto" style="margin-top: 2px;">
                    <i class="fe fe-alert-circle mr-2" aria-hidden="true"></i>
                </div>
                <div class="d-inline-block">
                    To specify an <strong>array</strong> value, use <strong>";"</strong> to delimit your elements.<br />
                    Example: first@mail.com;second@mail.com
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {!! form_admin()->select('key', 'Key', $keys, null, ['required']) !!}
                </div>
                <div class="col-md-6">
                    {!! form_admin()->text('value', 'Value', null, ['required']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-flex text-left">
                @include('varbox::buttons.cancel', ['url' => route('admin.configs.index')])
                @if($item->exists)
                    @include('varbox::buttons.save_stay')
                @else
                    @include('varbox::buttons.save_new')
                    @include('varbox::buttons.save_continue', ['route' => 'admin.configs.edit'])
                @endif
                @include('varbox::buttons.save')
            </div>
        </div>
    </div>
</div>
{!! form_admin()->close() !!}
