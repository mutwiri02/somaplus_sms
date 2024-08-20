<div>
    <form wire:submit.prevent="save">
        {!! \App\Helpers\ViewHelper::text('Parent Name') !!}
        {!! \App\Helpers\ViewHelper::email('Email') !!}
        {!! \App\Helpers\ViewHelper::text('Phone') !!}
        {!! \App\Helpers\ViewHelper::text('Student Name') !!}
        {!! \App\Helpers\ViewHelper::select('From Grade', $options = $grades) !!}
        {!! \App\Helpers\ViewHelper::select('To Grade', $options = $grades) !!}
        {!! \App\Helpers\ViewHelper::select('Gender', $options = $gender_types) !!}
        {!! \App\Helpers\ViewHelper::select('Level', $options = $levels) !!}
        {!! \App\Helpers\ViewHelper::select('County', $options = $counties) !!}
        {!! \App\Helpers\ViewHelper::select('Sub County', $options = $sub_counties) !!}

        {!! \App\Helpers\ViewHelper::text('From School') !!}
        {!! \App\Helpers\ViewHelper::select('To School', $options = $schools->pluck('name', 'id')) !!}

        <div class="box">
            <button type="submit" class="btn btn-primary">
                Send Application
            </button>
            <div class="space-30"></div>
        </div>
    </form>
</div>
