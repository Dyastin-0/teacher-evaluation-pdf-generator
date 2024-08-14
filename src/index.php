<?php
  require('./temporaryId.php');
  $name = 'Lorem Ipsum de amet lor de sur';
  $id = '00-0000';
  $course = 'Bachelor of Science in Computer Engineering';
  $image = '../assets/images/panda.png';
  $instructions = [
    '1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    '2. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    '3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    '4. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    '5. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
  ];

  $fillColor = [255, 127, 80];

  generateTemporaryId(
    $name, $id, $image, $course, $instructions, $fillColor
  );

?>