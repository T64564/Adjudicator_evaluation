@extends('layouts.layout')
@section('content')
@include('errors.form_errors')
<h1>
    <div style="text-align:left">
       Teams 
        <div style="float:right">
            {!! link_to('teams/create', 'Add new', ['class' => 'btn btn-primary']) !!}    
            {!! link_to('teams/import_csv', 'Import.csv', ['class' => 'btn btn-primary']) !!}    
        </div>
    </div>
</h1>
<hr />

<table class="table table-striped table-hover">
    <thead>
        <tr>
            @foreach ($heads as $head) 
                <th>
                    {{ $head }}
                </th>
            @endforeach
        </tr>
    </thead>
    @foreach ($values as $value)
        <tr>
            <td>
                {{ $value->name }}
            </td>
            <td>
                {{ $value->active}}
            </td>
            <td>
                {{-- {!! delete_form([$controller, $value->id]) !!} --}}
            </td>
        </tr>
    @endforeach
</table>
@endsection
