@extends('twill::layouts.form')

@section('contentFields')
    @formField('files', [
        'name' => 'web_logo',
        'label' => 'Logo ( svg format )',
    ])
    @formField('repeater', ['type' => 'menu_link'])
@stop
