@if($errors->first($field))
    {!! $errors->first($field, '<p style="margin-top:4px;"><span class="text-danger">:message</span></p>') !!}
@endif