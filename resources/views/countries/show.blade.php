@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($country->name) ? $country->name : 'Country' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('countries.destroy', $country->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('countries.index') }}" class="btn btn-primary" title="Show All Country">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('countries.create') }}" class="btn btn-success" title="Create New Country">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('countries.edit', $country->id ) }}" class="btn btn-primary" title="Edit Country">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Country" onclick="return confirm(&quot;Click Ok to delete Country.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $country->name }}</dd>
            <dt>Description</dt>
            <dd>{{ $country->description }}</dd>

        </dl>

    </div>
</div>

@endsection