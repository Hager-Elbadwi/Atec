<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $info->name !!}</p>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('address', 'English Address:') !!}
    <p>{!! $info->address !!}</p>
</div>
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('address', 'Arabic Address:') !!}
    <p>{!! $info->translate('ar')->address !!}</p>
</div>
<!--------------------------------------------->
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('phone', ' Phone:') !!}
    <p>{!! $info->phone !!}</p>
</div>
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('phone', 'Arabic Phone:') !!}
    <p>{!! $info->translate('ar')->address !!}</p>
</div>
<!-------------------------------------------->
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('email', ' Email:') !!}
    <p>{!! $info->email !!}</p>
</div>
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('email', 'Arabic Email:') !!}
    <p>{!! $info->translate('ar')->address !!}</p>
</div>
<!------------------------------------------->

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at !!}</p>
</div>

