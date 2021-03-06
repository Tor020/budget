@extends('layout')

@section('body')
    <div class="wrapper my-3">
        <h2>{{ __('actions.edit') }} {{ __('general.earning') }}</h2>
        <div class="box mt-3">
            <form method="POST" action="/earnings/{{ $earning->id }}" autocomplete="off">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="box__section">
                    <div class="input input--small">
                        <label>Date</label>
                        <DatePicker></DatePicker>
                        @include('partials.validation_error', ['payload' => 'date'])
                    </div>
                    <div class="input input--small">
                        <label>Description</label>
                        <input type="text" name="description" value="{{ $earning->description }}" />
                        @include('partials.validation_error', ['payload' => 'description'])
                    </div>
                    <div class="input input--small mb-0">
                        <label>Amount</label>
                        <input type="text" name="amount" value="{{ $earning->amount }}" />
                        @include('partials.validation_error', ['payload' => 'amount'])
                    </div>
                </div>
                <div class="box__section box__section--highlight text-right">
                    <button class="button">@lang('actions.save')</button>
                </div>
            </form>
        </div>
    </div>
@endsection
