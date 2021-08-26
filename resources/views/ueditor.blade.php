<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <script id="{{$name}}" type="text/plain">
            {!! old($column, $value) !!}
        </script>

        @include('admin::form.help-block')

    </div>
</div>

<script require="@ueditor">
    UE.getEditor('{{$name}}', {
        initialFrameHeight: 500,
        serverUrl: "{{ route('dcat.admin.tyrantg.ueditor.handle') }}",
    });
</script>
