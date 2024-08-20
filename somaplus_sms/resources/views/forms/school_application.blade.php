{!! Form::open([
    'url' => route('post-application'),
    'method' => 'POST',
    'class' => ['comment-form']
]) !!}


<div class="box">
    {!! Form::label('Parent Name') !!}
    {!! Form::text('parent_name', null, ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<div class="box">
    {!! Form::label('Phone Number') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<div class="box">
    {!! Form::label('Parent\'s Email') !!}
    {!! Form::text('parent_email', null, ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<div class="box">
    {!! Form::label('Student Name') !!}
    {!! Form::text('student_name', null, ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<div class="box">
    {!! Form::label('Name of current school') !!}
    {!! Form::text('from_school_name' , null , ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>

<div class="box">
    {!! Form::label('Select School to apply') !!}
    {!! Form::select('to_school_id', \App\Models\School::all()->map(function($item) {
            if ($item['fees_per_term']) {
                $item['name'] = $item->name . ' - ' . $item['fees_per_term'];
            }
        return $item;
    })
    ->pluck('name', 'id') , null , ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>

<div class="box">
    {!! Form::label('From Grade') !!}
    {!! Form::select('from_grade_id', \App\Models\Grade::all()->pluck('name', 'id') , null , ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<div class="box">
    {!! Form::label('To Grade') !!}
    {!! Form::select('to_grade_id', \App\Models\Grade::all()->pluck('name', 'id') , null , ['class' => 'form-control', 'required']) !!}
    <div class="space-30"></div>
</div>
<button type="submit" class="bttn-default">Submit Request</button>
{!! Form::close() !!}


