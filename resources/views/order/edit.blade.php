@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Save order') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('order.save') }}" aria-label="{{ __('Save order') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="order-date" class="col-sm-4 col-form-label text-md-right">Дата заказа</label>

                                <div class="col-md-6">
                                    <input id="order-date" type="datetime-local" class="form-control{{ $errors->has('order_date') ? ' is-invalid' : '' }}" name="order_date" value="{{ old('order_date') }}" required>

                                    @if ($errors->has('order_date'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('order_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact-name" class="col-sm-4 col-form-label text-md-right">Имя клиента</label>

                                <div class="col-md-6">
                                    <input id="contact-name" type="text" class="form-control{{ $errors->has('contact_name') ? ' is-invalid' : '' }}" name="contact_name" value="{{ old('contact_namec') }}" required>

                                    @if ($errors->has('contact_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact-phone" class="col-sm-4 col-form-label text-md-right">Телефон клиента</label>

                                <div class="col-md-6">
                                    <input id="contact-phone" type="text" class="form-control{{ $errors->has('contact_phone') ? ' is-invalid' : '' }}" name="contact_phone" value="{{ old('contact_phone') }}" required>

                                    @if ($errors->has('contact_phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Сохранить') }}
                                    </button>

                                    <a class="btn btn-link" href="">
                                        {{ __('Отмена') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
