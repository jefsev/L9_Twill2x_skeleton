@twillRepeaterTitle('Footer wigdet')
@twillRepeaterTitleField('footer_title', ['hidePrefix' => true])
@twillRepeaterTrigger('Add footer widget')
@twillRepeaterGroup('app')

@formField('checkbox', [
    'name' => 'use_logo',
    'label' => 'Start with logo',
    'note' => 'Toggle if widget needs to start with the footer logo'
])

@formField('input', [
    'name' => 'footer_title',
    'label' => 'footer title',
])

@formField('wysiwyg', [
    'name' => 'widget_content',
    'label' => 'Widget content',
    'toolbarOptions' => [
      'bold',
      'italic',
      'underline',
      'strike',
      ["script" => "super"],
      ["script" => "sub"],
      ['list' => 'ordered'],
      ['list' => 'bullet'],
      ['indent' => '-1'],
      ['indent' => '+1'],
      ["align" => []],
      ["direction" => "rtl"],
      'link',
      "clean",
    ],
    'editSource' => true,
 ])