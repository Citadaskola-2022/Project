<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

/** @var \App\Form\Field[] $fields */
$fields = [
  new \App\Form\Text('text_field'),
  new \App\Form\Checkbox('checkbox_field'),
  new \App\Form\Radio('radio_field'),
];

foreach ($fields as $field) {
    echo $field->render();
}