@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div>
                    <select class="select-value">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </select>

                    <select class="select-value">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </select>

                    <select class="select-value">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </select>

                    <script>
                    $(document).on('change', '.select-attendee', function() {
                        $current = $(this);
                        $(".select-attendee").not($current).children("option[value='" + $current.val() + "']")
                            .attr('disabled', "disabled");
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection