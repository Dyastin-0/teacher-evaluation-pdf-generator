<?php
  require('./temporaryId.php');
  $name = 'Lorem Ipsum de amet lor de sur';
  $id = '00-0000';
  $course = 'Bachelor of Science in Computer Engineering';
  $image = '../assets/images/panda.png';
  $instructions = [
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ];

  $fillColor = [255, 127, 80]; //rgb color

  generateTemporaryId(
    $name, $id, $image, $course, $instructions, $fillColor
  );

?>