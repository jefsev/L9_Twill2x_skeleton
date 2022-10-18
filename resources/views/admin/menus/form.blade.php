@extends('twill::layouts.form')

@section('contentFields')
    @formField('files', [
        'name' => 'web_logo',
        'label' => 'Logo ( svg format )',
    ])

    @formField('repeater', ['type' => 'menu_link'])

    @formField('files', [
        'name' => 'footer_logo',
        'label' => 'Footer logo',
    ])

    @formField('repeater', [
        'type' => 'footer_widget',
        'max'  => 4,
        ])
@stop
