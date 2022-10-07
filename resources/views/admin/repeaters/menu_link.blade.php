@twillRepeaterTitle('menu_link')
@twillRepeaterTitleField('menu_item_title', ['hidePrefix' => true])
@twillRepeaterTrigger('Add menu link')
@twillRepeaterGroup('app')

@formField('input', [
    'name' => 'menu_item_title',
    'label' => 'Link title',
])

@formField('input', [
    'name' => 'menu_item_slug',
    'label' => 'Slug',
])