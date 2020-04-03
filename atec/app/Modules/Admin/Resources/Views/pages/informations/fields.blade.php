<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', ' Name:') !!}
    {!! Form::text('name', isset($info) ? $info->name : null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
</div>
<!-------------------------------------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('text', 'English text:') !!}
    {!! Form::text('en[text]', isset($info) ? $info->translate('en')->text : null, ['class' => 'form-control', 'placeholder' => 'English']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('text', 'Arabic text:') !!}
    {!! Form::text('ar[text]', isset($info) ? $info->translate('ar')->text : null, ['class' => 'form-control', 'placeholder' => 'Arabic']) !!}
</div>

<!------------------------------------------------------->

<!-- Img Field -->

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.informations.index') !!}" class="btn btn-default">Cancel</a>
</div>
